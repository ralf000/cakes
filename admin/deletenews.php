<?php

require_once dirname(__DIR__) . '/helpers/autoloader.php';

$news = new DeleteNewsPageController();
$news->process();
