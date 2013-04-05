<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'products-form',
    'method' => 'post',
    'enableAjaxValidation'=>false,
   )); ?>

    <p class="note">Поля, отмеченные <span class="required">*</span> Обязательны для заполнения.</p>

    <?php echo $form->errorSummary($attr); ?>

    <div>
        <?php echo $form->labelEx($attr,'title'); ?>
        <?php echo $form->textField($attr,'title',array('size'=>60,'maxlength'=>300)); ?>
        <?php echo $form->error($attr,'title'); ?>
    </div>


    <div>
        <?php echo $form->labelEx($attr,'measure'); ?>
        <?php echo $form->textField($attr,'measure',array('size'=>5,'maxlength'=>10)); ?>
        <?php echo $form->error($attr,'measure'); ?>
        <br />
    </div>


    <div>
        <?php echo $form->labelEx($attr,'type'); ?>
        <?php echo $form->dropDownList($attr, 'type', array(

            AttributeTitles::TEXTFIELD => 'Текстовое поле',
            AttributeTitles::DIGITALFIELD => 'Числовое значение',
            AttributeTitles::BOOLEANFIELD => 'Да/Нет (1/0)',

        )); ?>
        <?php echo $form->error($attr,'type'); ?>
    </div>
    <br />
    <div>
        <?php echo $form->labelEx($attr,'default_value'); ?>
        <?php echo $form->textField($attr,'default_value',array('maxlength'=>255)); ?>
        <?php echo $form->error($attr,'default_value'); ?>
    </div>
    <br />
    <div>
        <?php echo $form->labelEx($attr,'in_search'); ?>
        <?php echo $form->checkBox($attr,'in_search'); ?>
        <?php echo $form->error($attr,'in_search'); ?>
    </div>
    <br />


    <div style="clear:both"></div>

    <div class="footer">
        <?php echo CHtml::submitButton($attr->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

    <?php $this->endWidget(); ?>


</div><!-- form -->