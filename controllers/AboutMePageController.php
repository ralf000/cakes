<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\AboutMeManager;

/**
 * @property array $title
 * @property array $aboutMe
 */
class AboutMePageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new AboutMeManager();
        $this->aboutMe = $manager->find(1);
        $this->title = ['Обо мне', ''];
        $this->forward(dirname(__DIR__) . '/views/admin/aboutme.php', $includedPage);
    }
}