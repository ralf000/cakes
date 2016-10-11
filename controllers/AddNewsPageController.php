<?php

namespace controllers;
use components\helpers\Helper;
use components\request\RequestRegistry;
use models\NewsManager;

/**
 * @property array $title
 */
class AddNewsPageController extends APageController
{

    public function process()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newsManager = new NewsManager();
            $req = RequestRegistry::getRequest();
            $data = $this->dataHandler($req->getProperties());
            $newsManager->add($data);
            header('Location: /admin/#news');
            exit;
        } else {
            $this->title = ['Новости', 'Добавление новости'];
            $this->forward(dirname(__DIR__) . '/views/admin/addnews.php');
        }
    }

    private function dataHandler($data)
    {
        return $result = [
            filter_var($data['title'], FILTER_SANITIZE_STRING),
            filter_var($data['description'], FILTER_SANITIZE_STRING),
            filter_var($data['image'], FILTER_SANITIZE_URL),
            filter_var(Helper::validateHtml($data['body']))
        ];
    }

}
 