<?php
$this->breadcrumbs = array(
  'Администрирование' => '/admin',
  'Галерея'
);
?>
<h2>Альбомы</h2>
<div class="row">

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'gallery-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
                'id',
                array(
                    'name'=>'title',
                    'type'=>'raw',
                    'value'=>'CHtml::link(CHtml::encode($data->title),\'/gallery/admin/album/\'.$data->id)'
                ),
                array(
                    'name' => 'is_published',
                    'value' => 'News::getStatus($data->is_published)',
                ),
                'created',
                array(
                    'class'=>'CButtonColumn',
                    'template'=>'{view}{update}{delete}',
                    'htmlOptions'=>array('width'=>'70px'),
                ),
            ),
        )); ?>
</div>
<div class="row">
    <a href="/gallery/admin/create" class="button add">Создать альбом</a>
</div>