<?php

namespace controllers;

use components\request\RequestRegistry;
use models\SliderManager;
use models\WorksManager;

class DeleteSlidePageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new SliderManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $manager->delete($id);
        header('Location: /admin/#slider');
        exit;
    }

}
 