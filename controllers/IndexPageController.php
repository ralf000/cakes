<?php

namespace controllers;

use Exception;
use models\NewsManager;
use models\ReviewsManager;

/**
 * @property array $news
 * @property array $reviews
 */

class IndexPageController extends APageController
{

    public function process()
    {
        try {
            $this->news = (new NewsManager())->findAll();
            $this->reviews = (new ReviewsManager())->findAllRandom();
            $this->forward('views/front.php');
        } catch (Exception $ex) {
            $this->forward('views/error.php');
        }
    }

}
 