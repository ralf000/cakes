<?php

 class UpdateNewsPageController extends PageController {

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
                 $newsManager->updateNews($data);
                 header('Location: news.php');
                 exit;
             } else {
                 $id   = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
                 $news = $newsManager->findNews($id);
                 if (empty($news))
                     throw new Exception('Такой новости нет');
                 $req->setProperty('news', $news);
                 $this->forward('views/admin/updatenews.php');
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
 