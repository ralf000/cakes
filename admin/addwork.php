<?php

use controllers\AddWorkPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new AddWorkPageController();
$work->process();