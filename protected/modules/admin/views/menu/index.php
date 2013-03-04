<?php $this->breadcrumbs = array(
    'Администрирование' => '/admin',
    'Меню'
);
?>
<h1>Редактор меню</h1>

<?php $this->widget('MainMenu'); ?>

<?php $this->renderPartial('_items', array('model'=>$model)); ?>

<div class="row">
    <?php echo CHtml::link('Добавить новый пункт меню','/admin/menu/create'); ?>
</div>

