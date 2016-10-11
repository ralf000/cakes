<?php

namespace controllers;

use components\helpers\Helper;
use components\request\Request;
use components\request\RequestRegistry;
use Exception;
use models\NewsManager;
use models\SliderManager;
use models\WorksManager;

/**
 * @property array $title
 * @property array $slide
 */
class UpdateSlidePageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new SliderManager();
        if (Request::isPost()) {
            $data = $manager->imgHandler($req->getProperties());
            $manager->update($data);
            header('Location: /admin/#slider');
            exit;
        } else {
            $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
            $slide = $manager->find($id);
            if (empty($slide))
                throw new Exception('Такого слайда нет');
            $this->slide = $slide;
            $this->title = ['Главный слайдер', 'Обновление информации о слайде'];
            $this->forward(dirname(__DIR__) . '/views/admin/updateslide.php');
        }
    }

}
 