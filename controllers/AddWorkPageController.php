<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\WorksManager;

/**
 * @property array $title
 */
class AddWorkPageController extends APageController
{

    public function process()
    {
        if (Request::isPost()) {
            $manager = new WorksManager();
            $data = $manager->dataHandler(RequestRegistry::getRequest()->getProperties());
            $manager->add($data);
            header('Location: /admin');
            exit;
        }
        $this->title = ['Мои работы', 'Добавление торта'];
        $this->forward(dirname(__DIR__) . '/views/admin/addwork.php');
    }
}
 