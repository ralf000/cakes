<form action="updatecontacts.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $this->contacts['title'] ?>"/>
    </div>

    <div class="form-group">
        <label for="review">Текст</label>
        <textarea name="text" id="text" cols="30" rows="10"><?= $this->contacts['text'] ?></textarea>
    </div>

    <button type="submit" id="submit" class="btn btn-success pull-right">Обновить</button>

</form>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('text', {
        height: 300,
        filebrowserBrowseUrl: '/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=2&editor=ckeditor'
    });
</script>


