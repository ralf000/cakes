<?php

namespace controllers;

use models\ReviewsManager;

/**
 * @property array reviews
 * @property array $title
 */
class ReviewsPageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new ReviewsManager();
        $this->reviews = $manager->findAll();
        $this->title = ['Отзывы', 'Управление отзывами'];
        $this->forward(dirname(__DIR__) . '/views/admin/reviews.php', $includedPage);
    }
}