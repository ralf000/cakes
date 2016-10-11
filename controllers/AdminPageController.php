<?php

namespace controllers;

class AdminPageController extends APageController
{

    public function process()
    {
        $this->forward(dirname(__DIR__) . '/views/admin/index.php');
    }

}
 