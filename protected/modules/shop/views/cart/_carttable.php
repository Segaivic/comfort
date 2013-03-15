<div id="carttable">
    <?php if(Yii::app()->shoppingCart->isEmpty()) {
    
    Yii::app()->clientScript->registerScript('order', "
    $('#productsin').text('Товаров: 0');
    $('#totalsum').text('На сумму: 0 р.');
    $('#order-buttons').hide();
    $('.order-form').html('');
  
    ");
    } 
    else {?>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Код</th>
                <th></th>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена, руб.</th>
                <th>Сумма,руб.</th>
            </tr>
        </thead>
        <tbody>
            <? foreach (Yii::app()->shoppingCart->getPositions() as $position) {
                ?>         
                <tr>
                    <td style="vertical-align: middle;"><center>
                <?=
                CHtml::ajaxLink(
                    CHtml::image('/images/icons/del.png'), CController::createUrl('shop/DeleteItemFromCartById'), 
                    array('type' => 'POST',
                    'data' => array('id' => $position->product_id),
                    'update' => '#carttable',
                    'beforeSend' => 'function(){
                                  $("#carttable").addClass("loading");
                                  }',
                    'complete' => 'function(response){
                                  $("#carttable").removeClass("loading");
                                  $("#productsin").html("Товаров: "+$("#itemscount").text());
                                  $("#totalsum").html("На сумму: "+$("#total").text()+" p.");
                                  }',
                        ), array('id' => 'deleteItem' . $position->product_id,
                    'title' => 'Удалить')
                );
                ?>
            </center></td>
            <td class="muted center_text"><?= CHtml::encode($position->product_id); ?></td>
            <td class="muted center_text"><?= CHtml::link(CHtml::image($position->image_url),$position->url); ?></td>
            <td><?= CHtml::link($position->title, $position->url)  ?></td>
            <td class="quantity-cell">
               <center> 
                <div class="quantity-change-icon"><a href="#" class="q-minus" id="quantity-minus<?= $position->product_id ?>"><i class="icon-minus-sign"></i></a></div>
                <div class="quantity-text">
                    <input type="text" placeholder="1" id="quantity<?= $position->product_id ?>" class="quantity" value="<?= $position->quantity ?>" class="input-mini">
                </div>
                <div class ="quantity-change-icon"><a href="#" class="q-plus" id="quantity-plus<?= $position->product_id ?>"><i class="icon-plus-sign"></i></a></div>
               </center>
            </td>
            <td><?= $position->getPrice(); ?></td>
            <td id="sum<?= $position->product_id ?>"><?= $position->getSumPrice(); ?></td>
            </tr>
            
       

        <? } ?> 
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><span style="display: none" id="itemscount"><?php echo Yii::app()->shoppingCart->getItemsCount(); ?></span></td>
        <td>Общая сумма<br />
            заказа:</td>
        <td><strong id="total"><?= Yii::app()->shoppingCart->getCost(); ?></strong></td>
        </tr>		  
        </tbody>
    </table>
</div>
<? } ?>
