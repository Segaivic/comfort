<?php
/* @var $this NewsController */
/* @var $model News */
$this->pageTitle = 'Новый пост - '.Yii::app()->name;
$this->breadcrumbs = array(
    'Администрирование' => '/admin',
    'Галерея' => '/gallery/admin',
    'Новая'
);
?>
<h2>Новый галерея</h2>
<?php
echo $this->renderPartial('_form', array('model'=>$model)); ?>
