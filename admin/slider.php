<?php

use controllers\SliderPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$works = new SliderPageController();
$works->process();