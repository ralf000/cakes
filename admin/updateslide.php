<?php

use controllers\UpdateSlidePageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new UpdateSlidePageController();
$work->process();