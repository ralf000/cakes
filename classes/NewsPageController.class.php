<?php

/**
 * Class NewsPageController
 * @property array $news
 * @property array $title
 */
class NewsPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $newsManager = new NewsManager();
        $this->news = $newsManager->findAll();
        $this->title = ['Новости', 'Управление новостями'];
        $this->forward(dirname(__DIR__) . '/views/admin/news.php');
    }
}