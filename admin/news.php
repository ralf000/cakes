<?php

use controllers\NewsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$news = new NewsPageController();
$news->process();