<?
use controllers\IndexPageController;

require_once __DIR__ . '/autoloader.php';

$index = new IndexPageController();
$index->process();
