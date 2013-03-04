<!DOCTYPE html>
<html>
<head>
    <title>Панель управления</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/css/kube.css" />
    <link rel="stylesheet" href="/css/kube.responsive.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/backend/style.css" />
    <?php Yii::app()->clientScript->registerCssFile('/css/gallery.css', 'screen' , CClientScript::POS_HEAD); ?>

<!--    shop-->
    <?php Yii::app()->clientScript->registerCssFile('/css/shop.css', 'screen' , CClientScript::POS_HEAD); ?>
    <?php $this->widget('application.extensions.fancybox.EFancyBox', array(
        'target'=>'a[rel=gallery]',
        'config'=>array(),
    )
); ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<div class="wrapper adminbg">

    <header id="header">
        <h1><?php echo CHtml::link(Yii::app()->name,'/admin',array('class'=>'sitetitle')); ?></h1>
        <?php Yii::app()->clientScript->registerCssFile('/css/buttons.css', 'screen' , CClientScript::POS_HEAD); ?>
        <nav id="nav">
            <ul>
                <li><a href="/admin">Панель управления</a></li>
                <li><a href="/">На сайт</a></li>
                <li><a href="/admin/news">Новости</a></li>
            </ul>
        </nav>
    </header>

    <div class="wrapper">
        <?php if(isset($this->breadcrumbs)):

        if ( Yii::app()->controller->route !== 'site/index' )
            $this->breadcrumbs = array_merge(array (Yii::t('zii','Home')=>Yii::app()->homeUrl), $this->breadcrumbs);

        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>false,
            'tagName'=>'ul',
            'separator'=>'',
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
            'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
            'htmlOptions'=>array ('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
        <?php endif; ?>
        <?php echo $content; ?>

        <?php if(isset($this->menu)): ?>
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Операции',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
            ?>
        <?php endif; ?>
    </div>

    <footer id="footer"><i>Sharovik cms v0.1</i> &copy; copyright 2013</footer>

</div>
</body>
</html>

