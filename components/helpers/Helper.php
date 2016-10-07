<?php

namespace components\helpers;

 use Reflection;
 use ReflectionClass;

 class Helper {

     static function g($var) {
         echo '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/default.min.css">
                <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>
                <script>hljs.initHighlightingOnLoad();</script>';
         echo '<pre><code class="php" style="border: 1px solid black;">';
         if (is_array($var)) {
             print_r($var);
         } elseif (is_object($var)) {
             $class = get_class($var);
             Reflection::export(new ReflectionClass($class));
         } else {
             echo $var;
         }
         echo '</code></pre>';
     }
     
     static function validateHtml($string){
         return strip_tags(($string), '<a><p><b><strong><table><th><tr><td><area><article><big><br><center><dd><div><dl><dt><dir><em><embed><figure><font><hr><h1><h2><h3><h4><h5><h6><img><ol><ul><li><small><sup><sub><tt><time><tfoot><thead><tbody><u>');
     }
 }
 