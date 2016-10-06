<?php

/**
 * @property array $title
 */
class AddNewsPageController extends APageController
{

    public function process()
    {
        $this->auth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newsManager = new NewsManager();
            $req = RequestRegistry::getRequest();
            $data = $this->dataHandler($req->getProperties());
            $newsManager->add($data);
            header('Location: news.php');
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
 