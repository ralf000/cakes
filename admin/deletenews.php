<?php

use controllers\DeleteNewsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$news = new DeleteNewsPageController();
$news->process();
