<?php

use components\request\RequestRegistry;
use models\NewsManager;

require_once dirname(__DIR__) . '/autoloader.php';
 
 header('Content-type: application/json; charset=utf-8');
 header('Cache-Control: no-store, no-cache');
 header('Expires: ' . date('r'));

 $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

 if (!$id)
     throw new Exception('Такой новости не существует');

 $newsManager = new NewsManager();
 $req         = RequestRegistry::getRequest();
 $result = $newsManager->find($id);
 $result['created_time'] = date('H:i:s d-m-Y', strtotime($result['created_time']));
 echo json_encode($result);
 