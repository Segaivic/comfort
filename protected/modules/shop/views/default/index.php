<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	'Каталог'
);
$this->pageTitle = "Каталог - ".Yii::app()->name;
$this->header= "Продукты";
?>
<div class="grid_24">
    <div class="hr">
        <div class="hrCnt">
            <div class="hrLeft">
            </div>
            <div class="hrRight">
             </div>
            <h2>Каталог</h2>
        </div>
    </div>
</div>
<div class="clear"></div>

        <?php foreach($children as $child): ?>
        <div class="grid_6" style="margin-bottom: 10px;">
            <div class="good">
                <?php echo CHtml::link(CHtml::image($child->thumbnail) , $child->url); ?>
                <br />
                <span class="good_title"><?php echo CHtml::link($child->title , $child->url); ?></span>
            </div>
        </div>
        <?php endforeach; ?>








