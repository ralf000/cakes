<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Theme style -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/app/template/css/sweetalert.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="/app/template/js/sweetalert.min.js"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="container">
            <div class="wrapper">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Новости <small>добавление новости</small>
                        </h1>
                    </section><!-- Left side column. contains the logo and sidebar -->
                    <form action="addnews.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Заголовок *</label>
                            <input type="text" name="title" id="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Главное изображение</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#fileManager">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>

                                <div class="modal fade" id="fileManager" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="width: 80%; height: auto;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Файловый менеджер</h4>
                                            </div>
                                            <div class="modal-body">
                                                <iframe src="/extensions/filemanager/dialog.php?akey=xGGEmoHLX2&type=1&field_id=image" style="width: 100%; height: 70vh" frameborder="0" allowtransparency="true"></iframe>  
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

                                <input type="text" id="image" name="image" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body">Содержимое *</label>
                            <textarea name="body" id="body" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-right">Добавить</button>
                    </form>
                </div><!-- ./wrapper -->
            </div>
        </div>

        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
        <script>
            function addImage() {
                ths = $('#image');
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
        </script>
    </body>
</html>



