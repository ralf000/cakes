<?php

namespace controllers;

use components\helpers\Helper;
use components\request\Request;
use components\request\RequestRegistry;
use Exception;
use models\NewsManager;

/**
 * @property array $title
 * @property array $news
 */
class UpdateNewsPageController extends APageController
{

    public function process()
    {
        $req = RequestRegistry::getRequest();
        $newsManager = new NewsManager();
        if (Request::isPost()) {
            $data = $newsManager->dataHandler($req->getProperties());
            $newsManager->update($data);
            header('Location: admin/#news');
            exit;
        } else {
            $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
            $news = $newsManager->find($id);
            if (empty($news))
                throw new Exception('Такой новости нет');
            $this->news = $news;
            $this->title = ['Новости', 'Обновление новости'];
            $this->forward(dirname(__DIR__) . '/views/admin/updatenews.php');
        }
    }

}
 