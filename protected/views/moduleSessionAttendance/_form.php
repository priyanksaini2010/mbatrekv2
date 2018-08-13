<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-session-attendance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'module_session_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_students',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_attended',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
