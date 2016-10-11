<?php

namespace controllers;

use components\request\RequestRegistry;
use models\WorksManager;

class DeleteWorkPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new WorksManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $manager->delete($id);
        header('Location: /admin');
        exit;
    }

}
 