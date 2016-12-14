<? $news = \components\request\RequestRegistry::getRequest()->getProperty('news'); ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Торты из памперсов в Зеленограде</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name='yandex-verification' content='59ff5a0058178284'/>
    <meta name="google-site-verification" content="Qwd-BiFw1IDVaRS29V89mPbnqGq_5IMyIBy5QyK-XTQ"/>
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- onepage scroll stylesheet-->
    <link rel="stylesheet" href="css/onepage-scroll.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/gallery/elastic_grid.css"/>
    <!--<link rel="stylesheet" type="text/css" href="css/gallery/demo.css" />-->
    <link rel="stylesheet" type="text/css" href="css/gallery/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/bg-slider.css"/>

    <link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css"/>

    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="main">
        <? include_once __DIR__ . '/inc/page1.php' ?>
        <? include_once __DIR__ . '/inc/page2.php' ?>
        <? include_once __DIR__ . '/inc/page3.php' ?>
        <? include_once __DIR__ . '/inc/page4.php' ?>
        <? include_once __DIR__ . '/inc/page5.php' ?>
        <? include_once __DIR__ . '/inc/page6.php' ?>
    </div>
</div>
<? require dirname(__DIR__) . '/views/inc/view.inc.php' ?>
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.onepage-scroll.js"></script>
<script src="js/front.js"></script>
<!--Responsive-Filterable-jQuery-Portfolio-Gallery-Plugin-Elastic-Grid-->
<script type="text/javascript" src="js/gallery/modernizr.custom.js"></script>
<script type="text/javascript" src="js/gallery/classie.js"></script>
<script type="text/javascript" src="js/gallery/elastic_grid.encode.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
<!--контент для страницы "мои работы"-->
<script src="js/cakes.js"></script>
<!--showflakes-->
<script src="/js/jquery.snow.min.1.0.js"></script>
<script>
    $(function () {
        $.fn.snow({ minSize: 20, maxSize: 50, newOn: 1000, flakeColor: '#0099FF' });
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/37964860" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>