<?php

use controllers\WorksPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$works = new WorksPageController();
$works->process();