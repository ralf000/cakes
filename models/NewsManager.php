<?php

namespace models;

use components\helpers\Helper;

class NewsManager extends AManager
{

    static $add = 'INSERT INTO news (title, description, image, body, created_time) VALUES (?, ?, ?, ?, NOW())';
    static $find = 'SELECT * FROM news WHERE id = ?';
    static $findAll = 'SELECT * FROM news ORDER BY created_time DESC';
    static $update = 'UPDATE news SET title = ?, description = ?, body = ?, image = ? WHERE id = ?';
    static $delete = 'DELETE FROM news WHERE id = ?';

    public function dataHandler($data)
    {
        return $result = [
            'title' => filter_var($data['title'], FILTER_SANITIZE_STRING),
            'description' => filter_var($data['description'], FILTER_SANITIZE_STRING),
            'body' => filter_var(Helper::validateHtml($data['body'])),
            'image' => filter_var($data['image'], FILTER_SANITIZE_URL),
            'id' => filter_var($data['id'], FILTER_SANITIZE_NUMBER_INT)
        ];
    }
}
 