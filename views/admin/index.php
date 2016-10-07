<?
/**
 * @var $this \controllers\APageController
 */
use controllers\NewsPageController;
use controllers\WorksPageController;
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#news">Новости</a></li>
    <li><a data-toggle="tab" href="#works">Мои работы</a></li>
    <li><a data-toggle="tab" href="#panel3">Панель 3</a></li>
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
    <div id="panel3" class="tab-pane fade">
        <h1>Панель 3</h1>
        <p>Содержимое 3 панели...</p>
    </div>
    <div id="panel4" class="tab-pane fade">
        <h1>Панель 4</h1>
        <p>Содержимое 4 панели...</p>
    </div>
</div>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>