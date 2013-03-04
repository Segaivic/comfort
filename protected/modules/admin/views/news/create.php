<?php
/* @var $this NewsController */
/* @var $model News */
$this->pageTitle = 'Новый пост - '.Yii::app()->name;
$this->breadcrumbs = array(
    'Администрирование' => '/admin',
    'Новый пост' => '/admin/news/create'
);
?>
<h2>Новый пост</h2>
<?php
echo $this->renderPartial('_form', array('model'=>$model , 'categories' => $categories)); ?>
