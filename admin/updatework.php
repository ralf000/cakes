<?php

require_once dirname(__DIR__) . '/helpers/autoloader.php';

$work = new UpdateWorkPageController();
$work->process();
