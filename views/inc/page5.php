<section id="page5" class="section-gray">
    <div class="content">
        <div class="container clearfix">
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-12">
                    <h2 class="heading">Новости</h2>
                    <div class="row">
                        <? if (!empty($this->news) && is_array($this->news)): ?>
                            <? $cnt = 0 ?>
                            <div id="news">
                                <ul class="bxslider">
                                    <li>
                                        <? foreach ($this->news as $n): ?>
                                            <div class="wrapper_body">
                                                <div class="cbm_wrap ">
                                                    <h1><?= $n['title'] ?></h1>
                                                    <small>
                                                        Добавлено: <?= date('H:i:s d-m-Y', strtotime($n['created_time'])) ?></small>
                                                    <? if (isset($n['image']) && !empty($n['image'])): ?>
                                                        <div class="newsImg">
                                                            <a class="fancybox" href="<?= $n['image'] ?>"><img
                                                                    src="<?= $n['image'] ?>"
                                                                    class="img-responsive center-block"></a>
                                                        </div>
                                                    <? endif; ?>
                                                    <? if (isset($n['description']) && !empty($n['description'])): ?>
                                                        <div class="description"><p><?= $n['description'] ?></p></div>
                                                    <? endif; ?>
                                                    <a href="<?= $n['id'] ?>" class="viewnews btn btn-default"
                                                       data-toggle="modal" data-target="#view">Читать далее</a>
                                                </div>
                                            </div>
                                            <?
                                            $cnt++;
                                            if ($cnt === 3)
                                                echo '</li><li>';
                                            ?>
                                        <? endforeach; ?>
                                </ul>
                            </div>
                        <? else: ?>
                            <?= '<p>Новостей пока нет</p>' ?>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>