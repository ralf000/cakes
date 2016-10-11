<?php

use controllers\ReviewsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$works = new ReviewsPageController();
$works->process();