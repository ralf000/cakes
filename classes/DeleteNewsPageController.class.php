<?php

 class DeleteNewsPageController extends PageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для удаления новости необходимо авторизоваться';
             exit;
         } else {
             $req         = RequestRegistry::getRequest();
             $newsManager = new NewsManager();
             $id          = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
             $newsManager->deleteNews($id);
             header('Location: news.php');
             exit;
         }
     }

 }
 