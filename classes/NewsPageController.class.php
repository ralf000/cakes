<?php

/**
 * Class NewsPageController
 * @property array $news
 * @property array $title
 */
 class NewsPageController extends APageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для управления новостями необходимо авторизоваться';
             exit;
         } else {
             $newsManager = new NewsManager();
//             $this->getRequest()->setProperty('news', $newsManager->findAll());
             $this->news = $newsManager->findAll();
             $this->title = ['Новости', 'Управление новостями'];
             $this->forward(dirname(__DIR__) . '/views/admin/news.php');
         }
     }

 }
 