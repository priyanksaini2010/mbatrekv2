<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'coupon-usage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'coupon_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email_used',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'users_new_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
