<?
/**
 * @var $this \controllers\APageController
 */
?>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-12">
            <? if (!empty($this->contacts) && is_array($this->contacts)): ?>
                <table id="products" class="table table-bordered table-striped table-hover" role="grid"
                       aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th>Заголовок</th>
                        <th>Текст</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr role="row">
                            <td><?= $this->contacts['title'] ?></td>
                            <td><?= $this->contacts['text'] ?></td>
                        </tr>
                    </tbody>
                </table>
            <? else: ?>
                <?= '<p>Страница "Контакты" пока не заполнена</p>' ?>
            <? endif; ?>
            <div class="pull-right">
                <a class="btn btn-warning" href="updatecontacts.php">Редактировать</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


