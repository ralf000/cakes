<?php

use controllers\DeleteWorkPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new DeleteWorkPageController();
$work->process();
