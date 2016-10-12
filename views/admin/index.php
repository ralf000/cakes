<?
/**
 * @var $this \controllers\APageController
 */
use controllers\AboutMePageController;
use controllers\ContactsPageController;
use controllers\NewsPageController;
use controllers\ReviewsPageController;
use controllers\SliderPageController;
use controllers\WorksPageController;
?>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#news">Новости</a></li>
    <li><a data-toggle="tab" href="#works">Мои работы</a></li>
    <li><a data-toggle="tab" href="#slider">Главный слайдер</a></li>
    <li><a data-toggle="tab" href="#reviews">Отзывы</a></li>
    <li><a data-toggle="tab" href="#aboutme">Обо мне</a></li>
    <li><a data-toggle="tab" href="#contacts">Контакты</a></li>
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
    <div id="reviews" class="tab-pane fade">
        <h1>Отзывы</h1>
        <? (new ReviewsPageController())->process(self::INCLUDED_PAGE); ?>
    </div>
    <div id="aboutme" class="tab-pane fade">
        <h1>Обо мне</h1>
        <? (new AboutMePageController())->process(self::INCLUDED_PAGE); ?>
    </div>
    <div id="contacts" class="tab-pane fade">
        <h1>Обо мне</h1>
        <? (new ContactsPageController())->process(self::INCLUDED_PAGE); ?>
    </div>
</div>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="/js/admin/index.js"></script>