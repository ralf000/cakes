<?php

use controllers\AddReviewPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new AddReviewPageController();
$work->process();