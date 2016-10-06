<?
/**
 * @var $this APageController
 */
?>
<?= $this->display(dirname(__DIR__) . '/parts/head.php') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="container">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <? if (isset($this->title) && is_array($this->title)): ?>
            <section class="content-header">
                <h1>
                    <?= $this->title[0] ?>
                    <? if ($this->title[1]): ?>
                        <small><?= $this->title[1] ?></small>
                    <? endif; ?>
                </h1>
                <? endif; ?>
            </section><!-- Left side column. contains the logo and sidebar -->
            <section class="content" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">

                                <?= $this->display($this->view) ?>

                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section>
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->
    </div>
</div>
<?= $this->display(dirname(__DIR__) . '/parts/footer.php') ?>


