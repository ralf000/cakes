<?php
/**
 * @property array $title
 */
 class AddNewsPageController extends APageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для добавление новости необходимо авторизоваться';
             exit;
         } else {
             if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                 $newsManager = new NewsManager();
                 $req         = RequestRegistry::getRequest();
                 $data        = $this->dataHandler($req->getProperties());
                 $newsManager->add($data);
                 header('Location: news.php');
                 exit;
             } else {
                 $this->title = ['Новости', 'Добавление новости'];
                 $this->forward(dirname(__DIR__) . '/views/admin/addnews.php');
             }
         }
     }

     private function dataHandler($data) {
         return $result = [
             filter_var($data['title'], FILTER_SANITIZE_STRING),
             filter_var($data['description'], FILTER_SANITIZE_STRING),
             filter_var($data['image'], FILTER_SANITIZE_URL),
             filter_var(Helper::validateHtml($data['body']))
         ];
//         $data['created_time'] = date('Y-m-d H:i:s');
     }

 }
 