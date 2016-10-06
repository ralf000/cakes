<?php

 class NewsPageController extends PageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для управления новостями необходимо авторизоваться';
             exit;
         } else {
             $newsManager = new NewsManager();
             $this->getRequest()->setProperty('news', $newsManager->findAllNews());
             $this->forward('views/admin/news.php');
         }
     }

 }
 