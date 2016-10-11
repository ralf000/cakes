<?php

namespace controllers;
use models\WorksManager;

/**
 * @property array $works
 * @property array $title
 */
class WorksPageController extends APageController
{

    public function process($includedPage = false)
    {
        $myWorksManager = new WorksManager();
        $this->works = $myWorksManager->findAll();
        $this->title = ['Мои работы', 'Торты для страницы "Мои работы"'];
        $this->forward(dirname(__DIR__) . '/views/admin/works.php', $includedPage);
    }
}