<?php
/* @var $this NewsController */
$this->pageTitle = "Новости - ".Yii::app()->name;
$this->breadcrumbs=array(
	'Новости',
);
?>
<h1>Новости</h1>
<div class="row">
    <div class="fourfifth">
       <?php $this->renderPartial('_posts', array('model' => $model , 'pages' => $pages)); ?>
    </div>
    <div class="fifth">
        <div class="inner rightsidebar">
            <h6>Разделы</h6>
            <nav id="navside">
                <ul>
                    <?php foreach ($blogs as $blog) { ?>
                    <li><?php echo CHtml::link($blog->title , $blog->url) ?></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
