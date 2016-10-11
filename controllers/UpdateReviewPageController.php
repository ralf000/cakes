<?php

namespace controllers;

use components\helpers\Helper;
use components\request\Request;
use components\request\RequestRegistry;
use Exception;
use models\NewsManager;
use models\ReviewsManager;
use models\SliderManager;
use models\WorksManager;

/**
 * @property array $title
 * @property array $review
 */
class UpdateReviewPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new ReviewsManager();
        if (Request::isPost()) {
            $data = $manager->dataHandler($req->getProperties());
            $manager->update($data);
            header('Location: /admin/#reviews');
            exit;
        } else {
            $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
            $slide = $manager->find($id);
            if (empty($slide))
                throw new Exception('Такого отзыва нет');
            $this->review = $slide;
            $this->title = ['Отзывы', 'Обновление отзыва о торте'];
            $this->forward(dirname(__DIR__) . '/views/admin/updatereview.php');
        }
    }

}
 