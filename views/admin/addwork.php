<form action="addwork.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Заголовок *</label>
        <input type="text" name="title" id="title" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group image-group">
        <label for="image">Изображение</label>
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default flm" data-toggle="modal" data-target="#fileManager1">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <button type="button" class="btn btn-default minusImg">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>
            </span>
            <div class="modal fade" id="fileManager1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" style="width: 80%; height: auto;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Файловый менеджер</h4>
                        </div>
                        <div class="modal-body">
                            <iframe src="/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=1&field_id=image1"
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

            <input type="text" id="image1" name="image[]" class="form-control imgInput"/>
        </div>
    </div>
    <div class="form-group pull-left">
        <a class="btn btn-warning addImgField" href="#">Ещё изображение</a>
    </div>
    <br><br><br>
    <!--    <div class="form-group">-->
    <!--        <label for="body">Содержимое *</label>-->
    <!--        <textarea name="body" id="body" cols="30" rows="10"></textarea>-->
    <!--    </div>-->
    <button type="submit" id="submit" class="btn btn-success pull-right">Добавить</button>
</form>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="/js/admin/image_handler.js"></script>
<script>
    $(function () {
        CKEDITOR.replace('description', {
            height: 300,
            filebrowserBrowseUrl: '/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=2&editor=ckeditor'
        });
    });
</script>


