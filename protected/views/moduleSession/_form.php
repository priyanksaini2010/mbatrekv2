<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-session-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'module_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_batch_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'agenda',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'session_plan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'venue_type',array('class'=>'span5','maxlength'=>1)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
