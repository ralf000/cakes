<?php
/**
 * Created by PhpStorm.
 * User: kudinov
 * Date: 07.10.2016
 * Time: 13:47
 */

namespace models;


class WorkContainer
{
    public $title = '';
    public $description = '';
    public $thumbnail = [];
    public $large = [];
    public $tags = [];


    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->thumbnail = $data['thumbnail'];
        $this->large = $data['large'];
    }

    public function getAsArray(){
        return [
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'large' => $this->large,
            'tags' => $this->tags
        ];
    }


}