<?php

class DeleteNewsPageController extends APageController
{

    public function process()
    {
        $this->auth();
        $req = RequestRegistry::getRequest();
        $newsManager = new NewsManager();
        $id = filter_var($req->getProperty('id'), FILTER_SANITIZE_NUMBER_INT);
        $newsManager->delete($id);
        header('Location: news.php');
        exit;
    }

}
 