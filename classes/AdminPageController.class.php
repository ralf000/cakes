<?php

 class AdminPageController extends APageController {

     public function process() {
         if (!isset($_SERVER['PHP_AUTH_USER'])) {
             header("Content-Type: text/html; charset=utf-8");
             header('WWW-Authenticate: Basic realm="My Realm"');
             header('HTTP/1.0 401 Unauthorized');
             echo 'Для управления новостями необходимо авторизоваться';
             exit;
         } else {
             $this->forward(dirname(__DIR__) . '/views/admin/index.php');
         }
     }

 }
 