<?php $this->breadcrumbs = array(
    'Администрирование' => '/admin',
    'Каталог' => '/shop/admin',
    'Категории товаров',
);
?>
<h1>Категории товаров</h1>
<div class="row">
    <?php
    Yii::app()->clientScript->registerScript('search', "
        $('.menu_structure').click(function(){
            $('.search-form').toggle();
            return false;
        });
    ");
    ?>
    <p>
       <?php echo CHtml::link('Структура каталога товаров','#',array('class'=>'menu_structure dot')); ?>
    </p>
    <div class="search-form" style="display:none">
        <?php $this->widget('AdminCategoriesMenu'); ?>
    </div><!-- search-form -->
</div>

<?php $this->renderPartial('_items', array('model'=>$model)); ?>

<div class="row">
    <?php echo CHtml::link('Добавить новую категорию товаров','/shop/admin/categories/create'); ?>
</div>