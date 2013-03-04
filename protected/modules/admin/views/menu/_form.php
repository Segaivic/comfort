<div>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'menu-form',
    'enableAjaxValidation'=>false,
)); ?>

<p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'title'); ?>
    <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
    <?php echo $form->error($model,'title'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'link'); ?>
    <?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>500)); ?>
    <?php echo $form->error($model,'link'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($model,'access'); ?>
    <?php echo CHtml::dropDownList('Menu[access]',$model->access,Menu::accessList());?>
    <?php echo $form->error($model,'access'); ?>
</div>

<div class="row">
    <label for="Menu_root">Родительский пункт</label>
    <?php
    if(!$model->isNewRecord) {
        $parent=$model->parent()->find();
        echo CHtml::dropDownList('Menu[root]',$parent->id,Menu::rootItems());
    }
    else {
        echo CHtml::dropDownList('Menu[root]','',Menu::rootItems());
    }
?>
</div>



<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->