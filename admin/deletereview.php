<?php

use controllers\DeleteReviewPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$work = new DeleteReviewPageController();
$work->process();
