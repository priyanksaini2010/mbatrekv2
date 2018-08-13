<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'industry-internship-form',
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array("enctype" =>"multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<?php echo $form->fileFieldRow($model,'file',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
