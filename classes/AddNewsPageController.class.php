<?php

/**
 * @property array $title
 */
class AddNewsPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $this->title = ['Новости', 'Добавление новости'];
        $this->forward(dirname(__DIR__) . '/views/admin/addnews.php');
    }

    private function dataHandler($data)
    {
        return $result = [
            filter_var($data['title'], FILTER_SANITIZE_STRING),
            filter_var($data['description'], FILTER_SANITIZE_STRING),
            filter_var($data['image'], FILTER_SANITIZE_URL),
            filter_var(Helper::validateHtml($data['body']))
        ];
//         $data['created_time'] = date('Y-m-d H:i:s');
    }

}
 