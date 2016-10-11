<?
/**
 * @var $this \controllers\APageController
 */
use controllers\NewsPageController;
use controllers\SliderPageController;
use controllers\WorksPageController;
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#news">Новости</a></li>
    <li><a data-toggle="tab" href="#works">Мои работы</a></li>
    <li><a data-toggle="tab" href="#slider">Главный слайдер</a></li>
</ul>

<div class="tab-content">
    <div id="news" class="tab-pane fade in active">
        <h1>Новости</h1>
        <? (new NewsPageController())->process(self::INCLUDED_PAGE); ?>
    </div>
    <div id="works" class="tab-pane fade">
        <h1>Торты</h1>
        <? (new WorksPageController())->process(self::INCLUDED_PAGE); ?>
    </div>
    <div id="slider" class="tab-pane fade">
        <h1>Главный слайдер</h1>
        <? (new SliderPageController())->process(self::INCLUDED_PAGE); ?>
    </div>
    <div id="panel4" class="tab-pane fade">
        <h1>Панель 4</h1>
        <p>Содержимое 4 панели...</p>
    </div>
</div>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>