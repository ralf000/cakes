<?php

use controllers\AddSlidePageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new AddSlidePageController();
$work->process();