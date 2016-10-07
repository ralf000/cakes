<?php

use controllers\AddWorksPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new AddWorksPageController();
$work->process();