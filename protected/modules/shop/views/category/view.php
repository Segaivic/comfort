
<?php
    $this->pageTitle = $model->title.' - '.Yii::app()->name;
    unset($this->breadcrumbs);

    $this->widget('SBreadcrumbs', array(
        'params'=>array(
            'id'=>$model->id,
        )
    ));
?>
<div class="grid_24">
    <div class="hr">
        <div class="hrCnt">
            <div class="hrLeft">
            </div>
            <div class="hrRight">
            </div>
            <h2><?php echo CHtml::encode($model->title); ?></h2>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--Категория товаров-->
<div class="grid_6">
           <?php echo CHtml::image($model->thumbnail); ?>
</div>
 <div class="grid_18">
        <p class="description">
            <?php echo $model->description; ?>
        </p>
</div>
<div class="clear" style="margin-bottom: 15px;"></div>

<!--Дочерние категори-->
<?php foreach($children as $child): ?>
<div class="grid_6 style="margin-bottom: 10px;">
    <div class="good">
        <?php echo CHtml::link(CHtml::image($child->thumbnail) , $child->url); ?>
        <br />
        <span class="good_title"><?php echo CHtml::link($child->title , $child->url); ?></span>
    </div>
</div>
<?php endforeach; ?>
<div class="clear"></div>

<!--товары-->
<div style="margin-top: 35px;">
  <div class="grid_24" style="margin-bottom: 10px;">
      <h3>В каталоге</h3>
  </div>
  <div class="clear"></div>

    <?php foreach ($products as $product): ?>
        <div class="grid_12">
            <div class="product">
                <div class="product_img">
                    <?php
                    if(isset($product->image->thumbnail)){
                        echo CHtml::link(CHtml::image($product->image->thumbnail) , $product->url);
                    }
                    ?>
                </div>
                <div class="product_desc">
                    <h4><?php echo CHtml::link($product->title , $product->url); ?></h4>
                    <p>
                        <i><?php echo CHtml::encode($product->description); ?></i>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="clear"></div>