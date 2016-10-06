<?php

 class IndexPageController extends PageController {

     public function process() {
         try {
             $newsManager = new NewsManager();
             $this->getRequest()->setProperty('news', $newsManager->findAllNews());
             $this->forward('views/front.php');
         } catch (Exception $ex) {
             $this->forward('views/error.php');
         }
     }

 }
 