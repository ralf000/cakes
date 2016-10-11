<?
/**
 * @var $this \controllers\APageController
 */
?>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
        <div class="col-sm-12">
            <? if (!empty($this->reviews) && is_array($this->reviews)): ?>
                <table id="products" class="table table-bordered table-striped table-hover" role="grid"
                       aria-describedby="example2_info">
                    <thead>
                    <tr role="row">
                        <th>Имя</th>
                        <th>Отзыв</th>
                        <th>Изображение</th>
                        <th>Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($this->reviews as $r): ?>
                        <tr role="row">
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['review'] ?></td>
                            <td><img src="<?= $r['image'] ?>" width="150px" alt=""></td>
                            <td style="text-align: center">
                                <a href="updatereview.php?id=<?= $r['id'] ?>"><span
                                        class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/admin/deletereview.php?id=<?= $r['id'] ?>" class="deleteReview"><span
                                        class="glyphicon glyphicon-minus"></span></a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            <? else: ?>
                <?= '<p>Отзывов пока нет</p>' ?>
            <? endif; ?>
            <div class="pull-right">
                <a class="btn btn-warning" href="addreview.php">Добавить отзыв</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.deleteReview').on('click', function (e) {
            if (!confirm('Вы уверены, что хотите удалить этот отзыв?'))
                return false;
            else
                return true;
        });
    });
</script>


