<?php
    $this->pageTitle = $product->title.' - '.Yii::app()->name;

    $this->breadcrumbs = array(
        'Администрирование' => '/admin',
        'Каталог' => '/shop/admin',
        'Товары' => '/shop/admin/product',
        $product->title => '/shop/admin/product/update/id/'.$product->id
    );
?>

<h1><?php echo $product->title; ?> - изображения</h1>
<div class="row">
    <?php $this->renderPartial('_upload' , array('model'=>$model)); ?>
</div>

<div class="row">
    <table class="width-100 striped" id='positions'>
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($photos as $photo): ?>
        <tr>
            <td><?php echo CHtml::link(CHtml::image($photo->thumbnail),$photo->image, array('rel'=>'gallery')); ?></td>
            <td style="min-width: 50px;"><?php echo CHtml::link(CHtml::image('/images/icons/delete16x16.png'),array('/shop/admin/product/deletephoto','id'=>$photo->id),array('confirm' => 'Уверены, что хотите удалить?')); ?></td>
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>