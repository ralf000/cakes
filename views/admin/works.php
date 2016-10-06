<?
/**
 * @var $this APageController
 */
?>
<?// Helper::g($this->works); exit;?>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-12">
            <? if (!empty($this->works) && is_array($this->works)): ?>
                <table id="products" class="table table-bordered table-striped table-hover" role="grid"
                       aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($this->works as $id => $w): ?>
                        <tr role="row">
                            <td><?= $w->title ?></td>
                            <td><?= $w->description ?></td>
                            <td><img src="/<?= $w->thumbnail[0] ?>" width="150px" alt="<?= $w->title ?>"></td>
                            <td style="text-align: center">
                                <a href="updatework.php?id=<?= $id ?>"><span
                                        class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/admin/deletework.php?id=<?= $id ?>" class="delete"><span
                                        class="glyphicon glyphicon-minus"></span></a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            <? else: ?>
                <?= '<p>Тортов пока нет</p>' ?>
            <? endif; ?>
<div class="pull-right">
    <a class="btn btn-warning" href="addwork.php">Добавить торт</a>
</div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.delete').on('click', function (e) {
            if (!confirm('Вы уверены, что хотите удалить этот торт?'))
                return false;
            else
                return true;
        });
    });
</script>
<!--        --><? // $this->forward(__DIR__ . '/parts/footer.php')?>


