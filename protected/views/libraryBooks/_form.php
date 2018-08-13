<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'library-books-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array(
            "enctype" => "multipart/form-data"
        )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        <label for="LibraryBooks_library_subject_id" class="required">Subject <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'library_subject_id',CHtml::listData(LibrarySubjects::model()->findAll(), "id", "name"),array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'added_by',array('value'=>Yii::app()->user->id)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
