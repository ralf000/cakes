<?php

namespace controllers;

use components\request\RequestRegistry;
use models\NewsManager;

class DeleteWorkPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $req = RequestRegistry::getRequest();
        $newsManager = new NewsManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $newsManager->delete($id);
        header('Location: news.php');
        exit;
    }

}
 