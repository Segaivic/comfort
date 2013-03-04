<?php foreach ($model as $data) { ?>
<div class="news">
    <div class="inner">
        <h3>
            <?php echo CHtml::encode($data->title); ?>
            <?php if (Yii::app()->getModule('user')->isAdmin()) {
                echo CHtml::link(CHtml::image('/images/icons/edit.png'),array('/admin/news/update','id' => $data->id));
            } ?>
        </h3>
        <div class="content">
            <?php echo $data->introtext; ?>
        </div>
        <div class="clear"></div>
        <div class="entry-meta">
            <span class="meta-published"><?php echo Yii::app()->dateFormatter->format("dd MMMM y, HH:mm", $data->created); ?></span>
            <span class="meta-categories"><?php echo CHtml::link(CHtml::encode($data->category->title),$data->category->url); ?></span>
        </div>
        <?php if(!empty($data->fulltext)) :?>
        <div class="linkmore">
            <?php echo CHtml::link('Полностью',$data->url); ?>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
</div>
<? } ?>
<?$this->widget('CLinkPager', array(
    'pages' => $pages,
    'cssFile' => false,
))?>