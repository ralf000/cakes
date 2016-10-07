<?php

use controllers\AdminPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$news = new AdminPageController();
$news->process();