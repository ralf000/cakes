<?php

namespace models;

use components\helpers\Helper;
use PDO;

/**
 * Class WorksManager
 * @package models
 */
class AboutMeManager extends AManager
{
    static $add = '';
    static $find = 'SELECT * FROM articles WHERE id = 1';
    static $findAll = 'SELECT * FROM articles ORDER BY id DESC';
    static $update = 'UPDATE articles SET title = ?, text = ?, image = ? WHERE id = 1';
    static $delete = '';

    public function dataHandler($data)
    {
        $result = [
            'title' => filter_var($data['title'], FILTER_SANITIZE_STRING),
            'text' => filter_var(Helper::validateHtml($data['review'])),
        ];
        if (isset($data['image'])) {
            list($host, $img) = explode('img', $data['image']);
            $result['image'] = '/img' . filter_var($img, FILTER_SANITIZE_URL);
        }
        return $result;
    }
}
 