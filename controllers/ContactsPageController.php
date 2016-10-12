<?php

namespace controllers;

use models\ContactsManager;

/**
 * @property array $title
 * @property array $contacts
 */
class ContactsPageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new ContactsManager();
        $this->contacts = $manager->find(2);
        $this->title = ['Контакты', ''];
        $this->forward(dirname(__DIR__) . '/views/admin/contacts.php', $includedPage);
    }
}