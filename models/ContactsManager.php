<?php

namespace models;

use components\helpers\Helper;

/**
 * Class WorksManager
 * @package models
 */
class ContactsManager extends AManager
{
    static $add = '';
    static $find = 'SELECT * FROM articles WHERE id = 2';
    static $findAll = 'SELECT * FROM articles ORDER BY id DESC';
    static $update = 'UPDATE articles SET title = ?, text = ? WHERE id = 2';
    static $delete = '';

    public function dataHandler($data)
    {
        return $result = [
            'title' => filter_var($data['title'], FILTER_SANITIZE_STRING),
            'text' => filter_var(Helper::validateHtml($data['text'])),
        ];
    }
}
 