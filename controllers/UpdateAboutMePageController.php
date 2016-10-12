<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\AboutMeManager;

/**
 * @property array $title
 * @property array $aboutMe
 */
class UpdateAboutMePageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new AboutMeManager();
        if (Request::isPost()) {
            $data = $manager->dataHandler(RequestRegistry::getRequest()->getProperties());
            $manager->update($data);
            header('Location: /admin/#aboutme');
            exit;
        } else {
            $this->aboutMe = $manager->find(1);
            $this->title = ['Обо мне', 'Редактирование страницы'];
            $this->forward(dirname(__DIR__) . '/views/admin/updateaboutme.php', $includedPage);
        }
    }
}