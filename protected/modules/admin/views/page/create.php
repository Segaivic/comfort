<?php
//breadcrumbs
$this->breadcrumbs = array(
        'Администрирование' => '/admin',
        'Управление страницами' => '/admin/page',
        'Новая страница'
);

//title
$this->pageTitle = 'Панель управления - новая страница';
?>
<h2>Новая страница</h2>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
