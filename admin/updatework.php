<?php

use controllers\UpdateWorkPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new UpdateWorkPageController();
$work->process();
