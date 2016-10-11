<?php

use controllers\UpdateReviewPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$c = new UpdateReviewPageController();
$c->process();