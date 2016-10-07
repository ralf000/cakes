<?php

namespace models;

use components\helpers\Helper;

class NewsManager extends AManager
{

    static $add = 'INSERT INTO news (title, description, image, body, created_time) VALUES (?, ?, ?, ?, NOW())';
    static $find = 'SELECT * FROM news WHERE id = ?';
    static $findAll = 'SELECT * FROM news ORDER BY created_time DESC';
    static $update = '';
    static $delete = 'DELETE FROM news WHERE id = ?';

    private function dataHandler($data)
    {
        return $result = [
            filter_var($data['title'], FILTER_SANITIZE_STRING),
            filter_var($data['description'], FILTER_SANITIZE_STRING),
            filter_var($data['image'], FILTER_SANITIZE_URL),
            filter_var(Helper::validateHtml($data['body']))
        ];
//         $data['created_time'] = date('Y-m-d H:i:s');
    }
}
 