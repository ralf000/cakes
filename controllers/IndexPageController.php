<?php

namespace controllers;

use Exception;
use models\AboutMeManager;
use models\NewsManager;
use models\ReviewsManager;

/**
 * @property array $news
 * @property array $reviews
 * @property array $aboutMe
 */

class IndexPageController extends APageController
{

    public function process()
    {
        try {
            $this->aboutMe = (new AboutMeManager())->find(1);
            $this->news = (new NewsManager())->findAll();
            $this->reviews = (new ReviewsManager())->findAllRandom();
            $this->forward('views/front.php');
        } catch (Exception $ex) {
            $this->forward('views/error.php');
        }
    }

}
 