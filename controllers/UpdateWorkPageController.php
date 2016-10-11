<?php

namespace controllers;

use components\helpers\Helper;
use components\request\Request;
use components\request\RequestRegistry;
use Exception;
use models\NewsManager;
use models\WorksManager;

/**
 * @property array $title
 * @property array $work
 */
class UpdateWorkPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $manager = new WorksManager();
        if (Request::isPost()) {
            $data = $manager->dataHandler($req->getProperties());
            if ($manager->update($data)) {
                header('Location: /admin/#work');
                exit;
            }
        } else {
            $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
            $work = $manager->find($id);
            if (empty($work))
                throw new Exception('Такой новости нет');
            $this->work = $work;
            $this->title = ['Мои работы', 'Обновление информации о торте'];
            $this->forward(dirname(__DIR__) . '/views/admin/updatework.php');
        }
    }

}
 