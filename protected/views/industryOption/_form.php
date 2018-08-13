<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'industry-option-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'option_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($model,'option_number',array('value'=>$_GET['option_number'])); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
