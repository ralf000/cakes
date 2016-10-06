<?php
/**
 * @property array $title
 * @property array $news
 */
 class UpdateNewsPageController extends APageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для обновления новости необходимо авторизоваться';
             exit;
         } else {
             $req         = RequestRegistry::getRequest();
             $newsManager = new NewsManager();
             if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                 $data        = $this->dataHandler($req->getProperties());
                 $newsManager->update($data);
                 header('Location: news.php');
                 exit;
             } else {
                 $id   = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
                 $news = $newsManager->find($id);
                 if (empty($news))
                     throw new Exception('Такой новости нет');
                 $this->news = $news;
                 $this->title = ['Новости', 'Обновление новости'];
                 $this->forward(dirname(__DIR__) . '/views/admin/updatenews.php');
             }
         }
     }

     private function dataHandler($data) {
         return $result = [
             'title'       => filter_var($data['title'], FILTER_SANITIZE_STRING),
             'description' => filter_var($data['description'], FILTER_SANITIZE_STRING),
             'body'        => filter_var(Helper::validateHtml($data['body'])),
             'image'       => filter_var($data['image'], FILTER_SANITIZE_URL),
             'id' => filter_var($data['id'], FILTER_SANITIZE_NUMBER_INT)
         ];
     }

 }
 