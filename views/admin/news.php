<?
/**
 * @var $this \controllers\APageController
 */
?>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-12">
            <? if (!empty($this->news) && is_array($this->news)): ?>
                <table id="products" class="table table-bordered table-striped table-hover" role="grid"
                       aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>Создан</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($this->news as $n): ?>
                        <tr role="row">
                            <td><?= $n['id'] ?></td>
                            <td><?= $n['title'] ?></td>
                            <td><?= $n['description'] ?></td>
                            <td><img src="<?= $n['image'] ?>" width="150px" alt="<?= $n['title'] ?>"></td>
                            <td><?= $n['created_time'] ?></td>
                            <td style="text-align: center">
                                <a href="updatenews.php?id=<?= $n['id'] ?>"><span
                                        class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/admin/deletenews.php?id=<?= $n['id'] ?>" class="delete"><span
                                        class="glyphicon glyphicon-minus"></span></a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            <? else: ?>
                <?= '<p>Новостей пока нет</p>' ?>
            <? endif; ?>
            <div class="pull-right">
                <a class="btn btn-warning" href="addnews.php">Добавить новость</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.delete').on('click', function (e) {
            if (!confirm('Вы уверены, что хотите удалить эту новость?'))
                return false;
            else
                return true;
        });
    });
</script>


