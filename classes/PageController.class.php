<?php

 abstract class PageController {

     abstract function process();

     function forward($resource) {
         include $resource;
         exit(0);
     }

     function getRequest() {
         return RequestRegistry::getRequest();
     }

 }
 