<?php

namespace models;

use components\helpers\Helper;
use PDO;

/**
 * Class WorksManager
 * @package models
 */
class ReviewsManager extends AManager
{
    static $add = 'INSERT INTO reviews (name, review, image) VALUES (?, ?, ?)';
    static $find = 'SELECT * FROM reviews WHERE id = ?';
    static $findAll = 'SELECT * FROM reviews ORDER BY id DESC';
    static $findAllRandom = 'SELECT * FROM reviews ORDER BY RAND()';
    static $update = 'UPDATE reviews SET name = ?, review = ?, image = ? WHERE id = ?';
    static $delete = 'DELETE FROM reviews WHERE id = ?';

    public function dataHandler($data)
    {
        $result = [
            'name' => filter_var($data['name'], FILTER_SANITIZE_STRING),
            'review' => filter_var(Helper::validateHtml($data['review'])),
            'image' => filter_var($data['image'], FILTER_SANITIZE_URL),
        ];
        if (isset($data['image'])) {
            list($host, $img) = explode('img', $data['image']);
            $result['image'] = '/img' . filter_var($img, FILTER_SANITIZE_URL);
        }
        if (isset($data['id']))
            $result['id'] = filter_var($data['id'], FILTER_SANITIZE_NUMBER_INT);
        return array_values($result);
    }

    public function findAllRandom()
    {
        return $this->doStatement(static::$findAllRandom)->fetchAll(PDO::FETCH_ASSOC);
    }

}
 