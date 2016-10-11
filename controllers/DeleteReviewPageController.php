<?php

namespace controllers;

use components\request\RequestRegistry;
use models\ReviewsManager;
use models\SliderManager;
use models\WorksManager;

class DeleteReviewPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new ReviewsManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $manager->delete($id);
        header('Location: /admin/#reviews');
        exit;
    }

}
 