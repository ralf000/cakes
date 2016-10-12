<?php

namespace controllers;

use components\request\Request;
use components\request\RequestRegistry;
use models\ContactsManager;

/**
 * @property array $title
 * @property array $contacts
 */
class UpdateContactsPageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new ContactsManager();
        if (Request::isPost()) {
            $data = $manager->dataHandler(RequestRegistry::getRequest()->getProperties());
            $manager->update($data);
            header('Location: /admin/#contacts');
            exit;
        } else {
            $this->contacts = $manager->find(2);
            $this->title = ['Контакты', 'Редактирование страницы'];
            $this->forward(dirname(__DIR__) . '/views/admin/updatecontacts.php', $includedPage);
        }
    }
}