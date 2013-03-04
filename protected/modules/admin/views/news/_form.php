<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
$categoriesList = CHtml::listData($categories,
    'id', 'title');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
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
        <?php echo $form->labelEx($model,'introtext'); ?>
        <?php
            $this->widget('ext.redactor.ERedactorWidget',array(
            'model'=>$model,
            'attribute'=>'introtext',
            'options'=>array(
                'allowedTags' => Yii::app()->params['redactor']['allowedTags'],
                'convertDivs' => Yii::app()->params['redactor']['convertDivs'],
                'lang'=>'ru',
                'fileUpload'=>Yii::app()->createUrl('/admin/news/fileUpload',array(
                    'attr'=>$model->introtext
                )),
                'fileUploadErrorCallback'=>new CJavaScriptExpression(
                    'function(obj,json) { alert(json.error); }'
                ),
                'imageUpload'=>Yii::app()->createUrl('/admin/news/imageUpload',array(
                    'attr'=>$model->introtext
                )),
                'imageGetJson'=>Yii::app()->createUrl('/admin/news/imageList',array(
                    'attr'=>$model->introtext
                )),
                'imageUploadErrorCallback'=>new CJavaScriptExpression(
                    'function(obj,json) { alert(json.error); }'),
                ),
            ));
        ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'fulltext'); ?>
        <?php
        $this->widget('ext.redactor.ERedactorWidget',array(
            'model'=>$model,
            'attribute'=>'fulltext',
            'options'=>array(
                'lang'=>'ru',
                'allowedTags' => Yii::app()->params['redactor']['allowedTags'],
                'convertDivs' => Yii::app()->params['redactor']['convertDivs'],
                'fileUpload'=>Yii::app()->createUrl('/admin/news/fileUpload',array(
                    'attr'=>$model->fulltext
                )),
                'fileUploadErrorCallback'=>new CJavaScriptExpression(
                    'function(obj,json) { alert(json.error); }'
                ),
                'imageUpload'=>Yii::app()->createUrl('/admin/news/imageUpload',array(
                    'attr'=>$model->fulltext
                )),
                'imageGetJson'=>Yii::app()->createUrl('/admin/news/imageList',array(
                    'attr'=>$model->fulltext
                )),
                'imageUploadErrorCallback'=>new CJavaScriptExpression(
                    'function(obj,json) { alert(json.error); }'),
            ),
        ));
        ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_published'); ?>
		<?php echo $form->checkBox($model,'is_published',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_published'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_onfrontpage'); ?>
		<?php echo $form->checkBox($model,'is_onfrontpage',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_onfrontpage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catid'); ?>
		<?php echo CHtml::dropDownList('News[catid]',$model->catid,$categoriesList);?>
		<?php echo $form->error($model,'catid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metakey'); ?>
		<?php echo $form->textField($model,'metakey',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metakey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadesc'); ?>
		<?php echo $form->textField($model,'metadesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metadesc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->