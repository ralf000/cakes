<?php

use controllers\AboutMePageController;

require_once dirname(__DIR__) . '/autoloader.php';

$c = new AboutMePageController();
$c->process();