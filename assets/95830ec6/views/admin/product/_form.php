<div>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'menu-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

<?php echo $form->errorSummary($model); ?>
    <table class="width-100 simple">
        <tbody>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'title'); ?>
            </td>
            <td>
                <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
                <?php echo $form->error($model,'title'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'description'); ?>
            </td>
            <td>
                <?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
                <?php echo $form->error($model,'description'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">

                    <?php echo $form->labelEx($model,'characters'); ?>
                    <?php
                    $this->widget('ext.redactor.ERedactorWidget',array(
                        'model'=>$model,
                        'attribute'=>'characters',
                        'options'=>array(
                            'allowedTags' => Yii::app()->params['redactor']['allowedTags'],
                            'convertDivs' => Yii::app()->params['redactor']['convertDivs'],
                            'lang'=>'ru',
                            'fileUpload'=>Yii::app()->createUrl('/shop/admin/index/fileUpload',array(
                                'attr'=>$model->characters
                            )),
                            'fileUploadErrorCallback'=>new CJavaScriptExpression(
                                'function(obj,json) { alert(json.error); }'
                            ),
                            'imageUpload'=>Yii::app()->createUrl('/shop/admin/index/imageUpload',array(
                                'attr'=>$model->characters
                            )),
                            'imageGetJson'=>Yii::app()->createUrl('/shop/admin/index/imageList',array(
                                'attr'=>$model->characters
                            )),
                            'imageUploadErrorCallback'=>new CJavaScriptExpression(
                                'function(obj,json) { alert(json.error); }'),
                        ),
                    ));
                    ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'meta_description'); ?>
            </td>
            <td>
                <?php echo $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>500)); ?>
                <?php echo $form->error($model,'meta_description'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'meta_keywords'); ?>
            </td>
            <td>
                <?php echo $form->textField($model,'meta_keywords',array('size'=>60,'maxlength'=>500)); ?>
                <?php echo $form->error($model,'meta_keywords'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="SProduct_root">Категория</label>
            </td>
            <td>
                <?php echo CHtml::dropDownList('SProducts[category_id]',$model->category_id,CHtml::listData(SCategories::model()->findAll(), 'id', 'title')); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($model,'active'); ?>
            </td>
            <td>
                <?php echo $form->checkBox($model,'active',array('size'=>1,'maxlength'=>1)); ?>
                <?php echo $form->error($model,'active'); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $form->labelEx($image,'image'); ?>
            </td>
            <td>
                <?php if(!$image->isNewRecord){
                    echo CHtml::image($image->thumbnail);
                } ?>
                <?php echo $form->fileField($image,'image'); ?>
                <?php echo $form->error($image,'image'); ?>
            </td>
        </tr>
        </tbody>
    </table>
<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->