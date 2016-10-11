<?
/**
 * @var $this \controllers\APageController
 * @var $this->slider array
 */
?>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-12">
            <? if (!empty($this->slider) && is_array($this->slider)): ?>
                <table id="products" class="table table-bordered table-striped table-hover" role="grid"
                       aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th>id</th>
                        <th>Изображение</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($this->slider as $id => $slide): ?>
                        <tr role="row">
                            <td><?= $id ?></td>
                            <td><img src="<?= (strpos($slide, 'http') === false) ? '/' . trim($slide, '/') : $slide?>" width="250px" alt="<?= $id ?>"></td>
                            <td style="text-align: center;vertical-align: middle;">
                                <a href="updateslide.php?id=<?= $id ?>"><span
                                        class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/admin/deleteslide.php?id=<?= $id ?>" class="deleteSlide"><span
                                        class="glyphicon glyphicon-minus"></span></a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            <? else: ?>
                <?= '<p>Слайдов пока нет</p>' ?>
            <? endif; ?>
            <div class="pull-right">
                <a class="btn btn-warning" href="addslide.php">Добавить слайд</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.deleteSlide').on('click', function (e) {
            if (!confirm('Вы уверены, что хотите удалить этот слайд?'))
                return false;
            else
                return true;
        });
    });
</script>


