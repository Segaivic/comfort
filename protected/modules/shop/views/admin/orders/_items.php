<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Артикул</th>
                <th>Наименование</th>
                <th>Количество</th>
                <th>Цена, руб.</th>
                <th>Сумма, руб.</th>
            </tr>
        </thead>
   
        <tbody>
            <? $products_id = Orders::string2array($model->product_id);
               $price = Orders::string2array($model->price);
               $quantity = Orders::string2array($model->quantity);
               $counter = 0;


      foreach ($products_id as $product) {?>

          <?php
                $productTitle = Products::getTitleById($product);
          if (isset($productTitle)) {
              ?>

           <tr>
               <td><?php echo CHtml::encode($product) ?></td>
               <td><?php echo CHtml::link($productTitle,'/shop/product/'.$product); ?></td>
                <td><?php echo $quantity[$counter]; ?></td>
                <td><?php echo $price[$counter]; ?></td>
                <td><?php echo $quantity[$counter] * intval($price[$counter]) ; ?></td>
           </tr>
           <?php } ?>
           <? if (!isset($productTitle)) { ?>
                <tr>
               <td>Товар удалён</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
           <? } ?>
           <? $counter++; } ?>
            <tr>
               <td></td>
                <td></td>
				<td></td>
                <td><b>Итого:</b></td>
                <td><b><? echo CHtml::encode($model->sum); ?> руб.</b></td>
           </tr>
        </tbody>
    </table>