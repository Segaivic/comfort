<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'blog-form',
    'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->errorSummary($blog); ?>

    <div class="row">
        <?php echo $form->labelEx($blog,'title'); ?>
        <?php echo $form->textField($blog,'title',array('size'=>25,'maxlength'=>255)); ?>
        <?php echo $form->error($blog,'title'); ?>
    </div>
    <div class="row">
        <?php echo $form->checkBox($blog,'is_enabled',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->labelEx($blog,'is_enabled'); ?>
        <?php echo $form->error($blog,'is_enabled'); ?>
    </div>
    <div class="row">
        <?php echo $form->checkBox($blog,'is_inbloglist',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->labelEx($blog,'is_inbloglist'); ?>
        <?php echo $form->error($blog,'is_inbloglist'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($blog->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->