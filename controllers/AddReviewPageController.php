<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\ReviewsManager;

/**
 * @property array $title
 */
class AddReviewPageController extends APageController
{

    public function process()
    {
        if (Request::isPost()) {
            $manager = new ReviewsManager();
            $data = $manager->dataHandler(RequestRegistry::getRequest()->getProperties());
            $manager->add($data);
            header('Location: /admin/#reviews');
            exit;
        }
        $this->title = ['Отзывы', 'Добавление отзыва о торте'];
        $this->forward(dirname(__DIR__) . '/views/admin/addreview.php');
    }
}
 