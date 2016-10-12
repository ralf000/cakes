<?php

use controllers\UpdateContactsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$c = new UpdateContactsPageController();
$c->process();