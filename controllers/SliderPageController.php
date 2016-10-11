<?php

namespace controllers;
use models\SliderManager;

/**
 * @property array $slider
 * @property array $title
 */
class SliderPageController extends APageController
{

    public function process($includedPage = false)
    {
        $manager = new SliderManager();
        $this->slider = $manager->findAll();
        $this->title = ['Главный слайдер', 'Управление слайдами'];
        $this->forward(dirname(__DIR__) . '/views/admin/slider.php', $includedPage);
    }
}