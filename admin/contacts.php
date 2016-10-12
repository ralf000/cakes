<?php

use controllers\ContactsPageController;

require_once dirname(__DIR__) . '/autoloader.php';

$c = new ContactsPageController();
$c->process();