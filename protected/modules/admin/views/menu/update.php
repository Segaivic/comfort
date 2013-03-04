<?php
$this->pageTitle = $model->title.' - редактирование';
$this->breadcrumbs = array(
  'Администрирование' => '/admin',
  'Меню' => '/admin/menu',
  $model->title
);
?>
<h2><?php echo $model->title; ?></h2>
<?php $this->renderPartial('_form', array('model' => $model)); ?>

<div class="row">
    <h4>Дочерние пункты:</h4>
    <?php if(!empty($items)) {
        $this->renderPartial('_items', array('model'=>$items));
    }?>
</div>
