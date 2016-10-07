<?php

namespace controllers;

/**
 * @property array $title
 */
class AddWorksPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $this->title = ['Мои работы', 'Добавление торта'];
        $this->forward(dirname(__DIR__) . '/views/admin/addwork.php');
    }

    private function dataHandler($data)
    {
//        return $result = [
//            filter_var($data['title'], FILTER_SANITIZE_STRING),
//            filter_var($data['description'], FILTER_SANITIZE_STRING),
//            filter_var($data['image'], FILTER_SANITIZE_URL),
//            filter_var(Helper::validateHtml($data['body']))
//        ];
    }

}
 