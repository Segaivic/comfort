<div class="row">
    <div id="attrTable">
    <div class="span8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Наименование</th>
                <th>Ед. измерения</th>
                <th>Тип</th>
                <th>Значение <br /> по умолчанию</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($model as $m) { ?>
            <tr>
                <td>
                    <p><?php echo $m->title; ?></p>
                </td>
                <td>
                    <p><?php echo $m->measure; ?></p>
                </td>
                <td>
                    <p><?php echo AttributeTitles::getTypeTitleById($m->type); ?></p>
                </td>
                <td>
                    <p><?php echo$m->default_value; ?></p>
                </td>
                <td>
                    <?php echo CHtml::link(CHtml::image('/images/icons/del.png','#',array('class' => 'deleteAttr','id' => 'd'.$m->id))) ; ?>
                </td>
                <td>
                    <?php echo CHtml::link(CHtml::image('/images/icons/edit.png'),'/shopcategories/updateattribute/'.$m->id) ; ?>
                </td>
            </tr>
                <? } ?>
            </tbody>
        </table>
    </div>
    </div>
</div>