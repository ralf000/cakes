<?php

use controllers\DeleteSlidePageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new DeleteSlidePageController();
$work->process();
