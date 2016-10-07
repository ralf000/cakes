<?
/**
 * @property array $this->news
 */
?>

<form action="updatenews.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $this->news['id'] ?>"/>
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $this->news['title'] ?>" required/>
    </div>
    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control"><?= $this->news['description'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Главное изображение</label>
        <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                            data-target="#fileManager">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>

            <div class="modal fade" id="fileManager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" style="width: 80%; height: auto;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Файловый менеджер</h4>
                        </div>
                        <div class="modal-body">
                            <iframe src="/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=1&field_id=image"
                                    style="width: 100%; height: 70vh" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <input type="text" id="image" name="image" class="form-control" value="<?= $this->news['image'] ?>"/>
        </div>
    </div>
    <div class="form-group">
        <label for="body">Содержимое</label>
        <textarea name="body" id="body" cols="30" rows="10"><?= $this->news['body'] ?></textarea>
    </div>
    <button type="submit" id="submit" class="btn btn-primary pull-right">Обновить</button>
</form>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
    function addImage() {
        var ths = $('#image');
        if (ths.val().search(/(.jpe?g)|(.gif)|(.png)/i) != -1) {
            $('#files').remove();
            ths.closest('.form-group')
                .append('<div id="files" class="files"><img style="width: 20%; padding: 7px;" src="' + ths.val() + '" alt="" /></div>');
        }
    }

    CKEDITOR.replace('body', {
        height: 300,
        filebrowserBrowseUrl: '/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=2&editor=ckeditor'
    });

    function responsive_filemanager_callback(ths) {
        addImage();
    }

    $(function () {
        addImage();
    });
</script>



