<?php

use controllers\UpdateAboutMePageController;

require_once dirname(__DIR__) . '/autoloader.php';

$c = new UpdateAboutMePageController();
$c->process();