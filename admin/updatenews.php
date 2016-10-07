<?php

use controllers\UpdateNewsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$news = new UpdateNewsPageController();
$news->process();
