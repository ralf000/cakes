<?php

namespace models;

use components\helpers\Helper;
use controllers\ICRUD;

/**
 * Class WorksManager
 * @package models
 */
class WorksManager implements ICRUD
{

    public $id;

    /**
     * @var
     */
    private $json;

    /**
     * WorksManager constructor.
     */
    public function __construct()
    {
        $this->json = $this->getJson();
    }


    /**
     * @param array $values
     * @return mixed
     */
    public function add(array $values)
    {
        $work = new WorkContainer($values);
        array_unshift($this->json, $work);
        $this->setJson();
        $this->getJson();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->json[$id];
    }


    /**
     * @param array $values
     * @return mixed
     */
    public function update(array $values)
    {
        $work = new WorkContainer($values);
        $this->json[$this->id] = $work->getAsArray();
        $this->setJson();
        return true;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        unset($this->json[$id]);
        $this->json = $this->cleanAndResetArray($this->json);
        $this->setJson();
        $this->getJson();
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->json;
    }


    private function getJson() : array
    {
        $this->json = json_decode(file_get_contents(dirname(__DIR__) . '/js/cakes.json'), true);
        return $this->json;
    }

    /**
     * JSON_UNESCAPED_UNICODE - Не кодировать многобайтные символы Unicode
     * @return int|bool
     */
    private function setJson()
    {
        return file_put_contents(dirname(__DIR__) . '/js/cakes.json', json_encode($this->json, JSON_UNESCAPED_UNICODE));
    }

    public function dataHandler($data)
    {
        if (isset($data['id']))
            $this->id = $data['id'];
        return $result = [
            'title' => filter_var($data['title'], FILTER_SANITIZE_STRING),
            'description' => filter_var(Helper::validateHtml($data['description'])),
            'large' => array_map(function ($el) {
                    return $this->filterImg($el);
            }, $this->cleanAndResetArray($data['image'])),
            'thumbnail' => array_map(function ($el) {
                    return str_replace('img', 'img/thumbs', $this->filterImg($el));
            }, $this->cleanAndResetArray($data['image'])),
        ];
    }

    private function filterImg(string $img)
    {
        $img = str_replace('http://' . $_SERVER['HTTP_HOST'], '', $img);
        return filter_var($img, FILTER_SANITIZE_URL);
    }

    private function cleanAndResetArray(array $array){
        return array_values(array_diff($array, ['']));
    }

}
 