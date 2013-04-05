<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sega
 * Date: 23.11.12
 * Time: 11:45
 * To change this template use File | Settings | File Templates.
 */
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/js/bootstrap-alert.js' , CClientScript::POS_END);
$this->pageTitle = CHtml::encode($attr->title).' - редактирование';


//breadcrumbs
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        'Категории товаров' => '/shopcategories/admin',
         $attr->category->title.' - характеристики' => '/shopcategories/attributes/'.$attr->category_id,
         $attr->title.' - редактирование',

    ),
));
//breadcrumbs
?>

<h2><?php echo CHtml::encode($attr->title); ?> - редактирование</h2>

<!--   success flash message-->
<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php endif; ?>


<div class="row">
    <div class="span8">
        <?php $this->renderPartial('_attrs', array('attr' => $attr)); ?>
    </div>
</div>
