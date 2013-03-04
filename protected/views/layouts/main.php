<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/960_24.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" media="all" />
    <link rel="stylesheet" href="/css/kube.responsive.min.css" media="all" />
    <link rel="stylesheet" href="/css/style.css" media="all" />
    <link rel="stylesheet" href="/css/menu.css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <?php Yii::app()->clientScript->registerCssFile('/css/gallery.css', 'screen' , CClientScript::POS_HEAD); ?>
    <?php Yii::app()->clientScript->registerCssFile('/css/shop.css', 'screen' , CClientScript::POS_HEAD); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php $this->widget('application.extensions.fancybox.EFancyBox', array(
        'target'=>'a[rel=fbox]',
        'config'=>array(),
    )
    ); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="main-page">
<header>
    <div class="container_24">
        <div class="wrapper">
            <div class="grid_6">
                <h1><a class="logo" href="/">Veranda</a></h1>
            </div>
            <div class="grid_10">
                <div class="slogan">
                    <span class="slogan_1"> Качество &mdash; реально, </span>
                    <span class="slogan_2"> цена &mdash; оптимальна </span>
                </div>
            </div>
            <div class="grid_8">
                <div class="address">
                    <div class="truba">
                        <img src="/images/template/truba.png" />
                    </div>
                    <div class="phonenumber">
                        <span class="pn">Заказы по телефону</span>
                        <span class="num">+7 952 14-888-87</span>
                    </div>
                </div>
            </div>

                <div class="clear"></div>

        </div>
    </div>
</header>

<!--navigation-->
<nav class="main_menu">
    <div class="container_24">
        <div class="grid_24">
            <?php $this->widget('MainMenu'); ?>
            <div class="social">
                <img src="/images/template/social/facebook.png" />
                <img src="/images/template/social/twitter.png" />
            </div>
            <div class="clear"></div>
    </div>
</nav>
<div style="margin-bottom: 20px;"></div>
<?php echo $content; ?>

<footer>
    <div class="container_24">
        <div class="wrapper">
            <div class="grid_16">
                <ul class="list1">
                    <li><a href="#">Каталог товаров</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
            </div>
            <div class="grid_6 prefix_2 privacy">
                <a href="index.html"><img src="/images/template/f_logo.png" width="78" height="21" alt="f_logo"></a> © 2012&nbsp;|&nbsp;<a href="index-5.html">Privacy Policy</a><br>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $("ul.menu li").each(function () {if (this.getElementsByTagName("a")[0].href == location.href) this.className = "selected";});
</script>

</body>
</html>