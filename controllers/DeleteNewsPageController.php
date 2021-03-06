<?php

namespace controllers;

use components\request\RequestRegistry;
use models\NewsManager;

class DeleteNewsPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $newsManager = new NewsManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $newsManager->delete($id);
        header('Location: /admin/#news');
        exit;
    }

}
 