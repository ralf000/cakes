<section id="page4" class="section-gray">
    <div class="content">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Отзывы о моих тортах из подгузников</h2>
                    <div id="reviews">
                        <ul class="bxslider">
                            <? if (!empty($this->reviews) && is_array($this->reviews)): ?>
                                <? foreach ($this->reviews as $key => $review): ?>
                                    <? if ($key % 2 === 0) echo '<li>'; ?>
                                    <div class="row" style="padding: 10px;">
                                        <div class="rev">
                                            <div class="col-md-9">
                                                <p class="lead"><b><?= $review['name'] ?></b></p>
                                                <?= $review['review'] ?>
                                            </div>
                                            <div class="col-md-3">
                                                <a class="fancybox" href="<?= $review['image'] ?>"><img
                                                        src="<?= $review['image'] ?>"
                                                        alt="Отзыв в торте из памперсов в Зеленограде"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <? if ($key % 2 === 1) echo '</li>'; ?>
                                <? endforeach; ?>
                            <? else: ?>
                                <p>Отзывов пока нет</p>
                            <? endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>