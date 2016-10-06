<?php

class AdminPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $this->forward(dirname(__DIR__) . '/views/admin/index.php');
    }

}
 