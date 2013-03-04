
<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/redactor/redactor.min.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/redactor/ru.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/clickedit.js' , CClientScript::POS_HEAD);
Yii::app()->clientScript->registerCssFile('/css/redactor.css', 'screen' , CClientScript::POS_HEAD);
    $this->pageTitle = $model->title.' - '.Yii::app()->name;

//description и keywords
if (!empty($model->meta_keywords) && !empty($model->meta_description)) {
    Yii::app()->clientScript->registerMetaTag($model->meta_keywords, 'description');
    Yii::app()->clientScript->registerMetaTag($model->meta_description, 'keywords');
} else {
    Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_description'], 'description');
    Yii::app()->clientScript->registerMetaTag(Yii::app()->params['meta_keywords'], 'keywords');
}
unset($this->breadcrumbs);
    $this->widget('SBreadcrumbs', array(
        'params'=>array(
            'id'=>$model->category->id,
        )
    ));
?>
<div class="grid_24">
    <div class="hr">
        <div class="hrCnt">
            <div class="hrLeft">
            </div>
            <div class="hrRight">
            </div>
            <h2>
                <?php echo $model->title; ?>
                <?php if (Yii::app()->getModule('user')->isAdmin()) {
                echo CHtml::link(CHtml::image('/images/icons/edit.png'),array('/shop/admin/product/update','id' => $model->id));
            } ?>
            </h2>
        </div>
    </div>
</div>
<div class="clear"></div>



<?php  if (Yii::app()->getModule('user')->isAdmin()) : ?>
<p>
    <button class="btn" onclick="clickToEditProduct();">Быстрое редактирование</button>
    <button class="btn" onclick="clickToSaveProduct();">Сохранить</button>
</p>
<?php endif; ?>
<div class="grid_6">
     <?php if($model->image): ?>
        <?php echo CHtml::link(CHtml::image($model->image->thumbnail),$model->image->image, array('rel'=>'fbox')); ?>
    <?php endif; ?>
</div>
<div class="grid_18">
    <p class="description">
        <?php echo $model->description; ?>
    </p>
</div>
<div class="clear" style="margin-bottom: 25px;"></div>




<div class="grid_24">
    <div class="characters" id="ch<?php echo $model->id; ?>">
        <?php echo $model->characters; ?>
    </div>
</div>
<div class="clear"></div>
<div class="grid_24 product_gallery" style="margin-top: 25px;">
     <?php if($model->gallery): ?>
        <?php foreach ($model->gallery as $gallery): ?>
            <?php echo CHtml::link(CHtml::image($gallery->thumbnail),$gallery->image, array('rel' => 'fbox')); ?>
        <?php endforeach; ?>
     <?php endif; ?>
</div>