<?php $this->breadcrumbs = array(
    'Администрирование' => '/admin',
    'Каталог' => '/shop/admin',
    'Товары',
);
?>
<h1>Товары</h1>
<div class="row">
<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'products-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'id',
            array(
                'name'=>'title',
                'type'=>'raw',
                'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
            ),
            array(
                'name' => 'active',
                'value' => 'CConvertValues::convBool($data->active)',
            ),

            array(
                'name'=>'category',
                'filter' => CHtml::listData(SCategories::model()->findAll(), 'id', 'title'),
                'type' => 'raw',
                'value'=>'$data->category[\'title\']',
            ),

            array(
                'class'=>'CButtonColumn',
                'template'=>'{gallery}{view}{update}{delete}',
                'buttons'=> array(
                    'view' => array
                    (
                        'label'=>'Просмотр',
                        'url'=>'Yii::app()->createUrl("shop/product/view/", array("id"=>$data->id))',
                    ),
                    'gallery' => array
                    (
                        'label'=>'Фото',
                        'imageUrl'=>'/images/icons/gallery16x16.png',
                        'url'=>'Yii::app()->createUrl("shop/admin/product/gallery/", array("id"=>$data->id))',
                    ),
                ),
                'htmlOptions'=>array('width'=>'70px'),
            ),
        ),
    )); ?>
</div>
<div class="row">
    <?php echo CHtml::link('Добавить новый товар','/shop/admin/product/create'); ?>
</div>