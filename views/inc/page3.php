<section id="page3">
    <div class="content">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="heading"><?= $this->aboutMe['title'] ?></h2>
                    <?= $this->aboutMe['text'] ?>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <p><img src="<?= $this->aboutMe['image'] ?>" alt="<?= $this->aboutMe['title'] ?>"
                            class="img-responsive img-circle"></p>
                </div>
            </div>
        </div>
    </div>
</section>