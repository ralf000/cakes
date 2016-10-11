<?php

namespace models;

use components\helpers\Helper;
use controllers\ICRUD;

/**
 * Class WorksManager
 * @package models
 */
class SliderManager implements ICRUD
{

    /**
     * @var string
     */
    private $path = '';
    /**
     * @var string
     */
    private $slider = '';
    /**
     * @var array
     */
    private $slides = [];

    /**
     * @var string
     */
    private $template = '';

    /**
     * @var int
     */
    public $id;

    /**
     * SliderManager constructor.
     */
    public function __construct()
    {
        if (empty($this->path))
            $this->path = dirname(__DIR__) . '/css/bg-slides.css';
        if (empty($this->slider))
            $this->slider = $this->getSlides();
        $this->split();
        $this->template = "
/*1*/
.cb-slideshow li:nth-child(1) span {
    background-image: url({img});
    -webkit-animation-delay: 0s;
    -moz-animation-delay: 0s;
    -o-animation-delay: 0s;
    -ms-animation-delay: 0s;
    animation-delay: 0s;
}
.cb-slideshow li:nth-child(1) div {
    -webkit-animation-delay: 0s;
    -moz-animation-delay: 0s;
    -o-animation-delay: 0s;
    -ms-animation-delay: 0s;
    animation-delay: 0s;
}
/*~1*/";
    }


    /**
     * @param array $values
     * @return mixed
     */
    public function add(array $values)
    {
        $slide = preg_replace('~\{img\}~', $values['image'], $this->template);
        array_unshift($this->slides, $slide . PHP_EOL . PHP_EOL);
        $this->setSlides();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        foreach ($this->slides as $key => $slide){
            if (strpos($slide, "/*$id*/") !== false){
                $this->id = $key;
                return $this->parseImage();
            }
        }
        return null;
    }

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->parseImages();
    }

    /**
     * @param array $values
     * @return mixed
     */
    public function update(array $values)
    {
        $this->find($values['id']);
        $this->slides[$this->id] = preg_replace('~url\(.*\)~iU', "url({$values['image']})", $this->slides[$this->id]);
        $this->setSlides();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $this->find($id);
        unset($this->slides[$this->id]);
        $this->setSlides();
    }

    /**
     * @return string
     */
    private function getSlides()
    {
        $this->slider = file_get_contents($this->path);
        return $this->slider;
    }

    /**
     * @return int
     */
    private function setSlides()
    {
        $this->cleanAndSetSlidesNumbers();
        $this->join();
        return file_put_contents($this->path, $this->slider);
    }

    private function parseImage(){
        if (preg_match('~url\((.*)\)~iU', $this->slides[$this->id], $result))
            return $result[1];
        return false;
    }


    /**
     * @return array
     */
    private function parseImages()
    {
        $output = [];
        foreach ($this->slides as $slide){
            if (preg_match('~/\*(\d{1,2})\*/~iU', $slide, $id) && preg_match('~url\((.*)\)~', $slide, $img))
                if(isset($id[1]) && isset($img[1]))
                    $output[$id[1]] = $img[1];
        }
        return $output;
    }


    /**
     * @param array $img
     * @return array
     */
    public function imgHandler(array $img)
    {
        if (strpos($img['image'], 'http') !== false)
            list($host, $image) = explode('img', $img['image']);
        $arr = ['image' => filter_var('/img' . $image, FILTER_SANITIZE_URL)];
        if (isset($img['id']))
            $arr['id'] = $img['id'];
        return $arr;
    }


    /**
     * @return array
     */
    private function split()
    {
        $output = [];
        foreach ($arr = preg_split('~\/\*\~\d{1,2}\*\/~', $this->slider) as $key => $slide) {
            preg_match('~\/\*(\d{1,2})\*\/~', $slide, $result);
            if ($key !== count($arr) - 1)
                $output[$result[1]] = $slide . PHP_EOL . "/*~{$result[1]}*/" . PHP_EOL;
        }
        $this->slides = $output;
        return $output;
    }

    /**
     * @return string
     */
    private function join(){
        return $this->slider = preg_replace('~\n{2,}~', "\n", implode('', $this->slides));
    }

    /**
     * @return array|bool
     */
    private function cleanAndSetSlidesNumbers()
    {
        if (!$this->slides)
            return false;

        $output = [];
        $i = 1;
        $timeout = 0;
        foreach ($this->slides as $key => $slide) {
            $patterns = [
                '~/\*\d{1,2}\*/~',
                '~/\*\~\d{1,2}\*/~',
                '~(nth-child)\((\d{1,2})\)~i',
                '~\d{1,3}s~'
            ];
            $replaces = [
                "/*{$i}*/",
                "/*~{$i}*/",
                "$1($i)",
                "{$timeout}s"
            ];
            $output[$key] = preg_replace($patterns, $replaces, $slide);
            $i++;
            $timeout += 6;
        }

        $this->slides = $output;
        return $this->slides;
    }

}