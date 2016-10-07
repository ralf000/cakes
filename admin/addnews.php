<?php

use controllers\AddNewsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$news = new AddNewsPageController();
$news->process();