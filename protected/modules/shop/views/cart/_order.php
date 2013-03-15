<div class="form">
    
<?php
Yii::app()->clientScript->registerScript('lawyersform', "

$('#Orders_is_lawyer').click(function(){
	$('.lawyersform').toggle('slow');  
	
});
");

?>

    <?php $form = $this->beginWidget('CActiveForm', array(
            'id'=>'orderform',
            'enableAjaxValidation'=>true,  
            'clientOptions' => array(
                'validateOnSubmit' => true,
                 'validateOnChange' => false,
               )
    )); ?>
<p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>
<div class="top25"></div>

<?php echo CHtml::errorSummary($model); ?>
	<div>
		<?php echo Chtml::label('Контактное лицо *', 'name'); ?>
                <?php echo $form->textField($model , 'name'); ?>
                <?php echo $form->error($model,'name'); ?>
	</div>
     <br />
          <div>
		<?php echo Chtml::label('Email *', 'email'); ?>
                <?php echo $form->textField($model , 'email'); ?>
                <?php echo $form->error($model,'email'); ?>
	</div>
     <br />
        <div>
		<?php echo Chtml::label('Адрес доставки *', 'address'); ?>
                <?php echo $form->textField($model , 'address'); ?>
                <?php echo $form->error($model,'address'); ?>
	</div>
     <br />
        <div>
		<?php echo $form->label($model , 'payment'); ?>
                <?php echo CHtml::dropDownList('Orders[payment]','Orders[payment]',
                                                array ('нал' => 'Наличными', 'безнал' => 'Безналичный расчёт')
                                                ); ?>
        </div>
     <br />
        <div>
		<?php echo Chtml::label('Как с вами связаться (телефон , icq) *', 'contacts'); ?>
                <?php echo $form->textArea($model ,'contacts' , array('rows'=>'2')); ?>
                <?php echo $form->error($model,'contacts'); ?>
	</div>  
     <br />
        <div>
		<?php echo $form->label($model, 'comments'); ?>
                <?php echo $form->textArea($model , 'comments' , array('rows'=>'8')); ?>
                <?php echo $form->error($model,'comments'); ?>
	</div>
     <br />
        <div>
                    <?php echo $form->checkBox($model, 'is_lawyer'); ?>
                    <span id="lawyer">Юридическое лицо</span>
                    <?php echo $form->error($model,'is_lawyer'); ?>
        </div>
        <br />
        <div class="lawyersform"  style="display: none">
                <div>
                    <label>ИНН <span class="required">*</span></label>
                    <?php echo $form->textField($model,'inn_num'); ?>
                    <?php echo $form->error($model,'inn_num'); ?>
                    </div>
                    <br />
                    <div>
                    <label>Наименование организации <span class="required">*</span></label>
                    <?php echo $form->textField($model,'organization'); ?>
                    <?php echo $form->error($model,'organization'); ?>
                    </div>
                    <br />
        </div>
        <div>
                    <?php echo $form->checkBox($model, 'call_courier'); ?>
                    <span id="lawyer">Заказать курьера</span>
                    <?php echo $form->error($model,'call_courier'); ?>
        </div>
        <br />
        <div>
                <?if(extension_loaded('gd') && Yii::app()->user->isGuest):?>
                <?=CHtml::activeLabelEx($model, 'verifyCode')?>
                <?$this->widget('CCaptcha')?>
                <?=CHtml::activeTextField($model, 'verifyCode')?>
                <?endif?>
        </div>
      
        <div class="submit">
		<?php echo CHtml::submitButton('Оформить заказ' , array('class' => 'btn btn-info')); ?>
	</div>
<?php $this->endWidget(); ?>


</div><!-- form -->