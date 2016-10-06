<? $news = RequestRegistry::getRequest()->getProperty('news'); ?>
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
                    <div class="pull-right">
                        <a class="btn btn-warning" href="addnews.php">Добавить новость</a>
                    </div>
                    <section class="content-header">
                        <h1>
                            Новости <small>управление новостями</small>
                        </h1>
                    </section><!-- Left side column. contains the logo and sidebar -->
                    <section class="content" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <? if (!empty($news) && is_array($news)): ?>
                                                         <table id="products" class="table table-bordered table-striped table-hover" role="grid" aria-describedby="example2_info">
                                                             <thead>
                                                                 <tr role="row">
                                                                     <th>ID</th>
                                                                     <th>Заголовок</th>
                                                                     <th>Описание</th>
                                                                     <th>Создан</th>
                                                                     <th>Управление</th>
                                                                 </tr>
                                                             </thead>
                                                             <tbody>
                                                                 <? foreach ($news as $n): ?>
                                                                     <tr role="row">
                                                                         <td><?= $n['id'] ?></td>
<!--                                                                         <td><a href="<?= $n['image'] ?>"><img style="height: 200px; width: auto;" src="<?= $n['image'] ?>" alt="<?= $n['title'] ?>" /></a></td>-->
                                                                         <td><?= $n['title'] ?></td>
                                                                         <td><?= $n['description'] ?></td>
                                                                         <td><?= $n['created_time'] ?></td>
                                                                         <td style="text-align: center">
                                                                             <a href="updatenews.php?id=<?=$n['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                                             <a href="/deletenews.php?id=<?=$n['id']?>" class="delete"><span class="glyphicon glyphicon-minus"></span></a>
                                                                         </td>
                                                                     </tr>
                                                                 <? endforeach; ?>
                                                             </tbody>
                                                         </table>
                                                     <? else: ?>
                                                         <?= '<p>Новостей пока нет</p>' ?>
                                                    <? endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section>
                    <div class="control-sidebar-bg"></div>
                </div><!-- ./wrapper -->
            </div>
        </div>

        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $(function(){
            $('.delete').on('click', function(e){
                if (!confirm('Вы уверены, что хотите удалить эту новость?'))
                    return false;
                else
                    return true;
            });
        });
        </script>
    </body>
</html>


