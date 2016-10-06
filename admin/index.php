<?php

require_once dirname(__DIR__) . '/helpers/autoloader.php';

$news = new AdminPageController();
$news->process();