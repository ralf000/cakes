<section id="page6">
    <a name="5"></a>
    <div class="content">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading"><?= $this->contacts['title'] ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <form id="contact-form" class="contact-form">
                                <div class="controls">
                                    <div id="feedback"></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Ваше имя *</label>
                                                <input type="text" name="name" id="name" placeholder="Введите ваше имя"
                                                       required="required" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email">Ваш email *</label>
                                        <input type="email" name="email" id="email" placeholder="Введите ваш email"
                                               required="required" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="message">Сообщение *</label>
                                        <textarea rows="4" name="message" id="message" placeholder="Введите сообщение"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <input type="button" name="mail" id="mail" value="Отправить"
                                               class="btn btn-primary btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <?= $this->contacts['text'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <h3 align="center">Я в социальных сетях</h3>
                        <div class="social">
                            <div class="row">
                                <div class="col-md-4">
                                    <a target="_blank" href="http://vk.com/club112426949" title="ВКонтакте"><i
                                            class="fa fa-fw fa-vk"></i> Вконтакте</a>
                                </div>
                                <div class="col-md-4">
                                    <a target="_blank" href="https://ok.ru/profile/35169748959" title="Одноклассники"><i
                                            class="fa fa-fw fa-odnoklassniki"></i> Одноклассники</a>
                                </div>
                                <div class="col-md-4">
                                    <a target="_blank" href="https://www.instagram.com/diaper_cake_zelenograd/"
                                       title="Инстраграм"><i class="fa fa-fw fa-instagram"></i> Инстраграм</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>