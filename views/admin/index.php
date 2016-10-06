<?
/**
 * @var $this APageController
 */
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#news">Новости</a></li>
    <li><a data-toggle="tab" href="#works">Мои работы</a></li>
    <li><a data-toggle="tab" href="#panel3">Панель 3</a></li>
</ul>

<div class="tab-content">
    <div id="news" class="tab-pane fade in active">
        <? (new NewsPageController())->process(); ?>
    </div>
    <div id="works" class="tab-pane fade">
        <? (new WorksPageController())->process(); ?>
    </div>
    <div id="panel3" class="tab-pane fade">
        <h3>Панель 3</h3>
        <p>Содержимое 3 панели...</p>
    </div>
    <div id="panel4" class="tab-pane fade">
        <h3>Панель 4</h3>
        <p>Содержимое 4 панели...</p>
    </div>
</div>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>