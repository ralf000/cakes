<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\SliderManager;
use models\WorksManager;

/**
 * @property array $title
 */
class AddSlidePageController extends APageController
{

    public function process()
    {
        if (Request::isPost()) {
            $manager = new SliderManager();
            $img = $manager->imgHandler(RequestRegistry::getRequest()->getProperties());
            $manager->add($img);
            header('Location: /admin/#slider');
            exit;
        }
        $this->title = ['Главный слайдер', 'Добавление слайда'];
        $this->forward(dirname(__DIR__) . '/views/admin/addslide.php');
    }
}
 