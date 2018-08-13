<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'job-posting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'industry_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'company_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'function',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_opening',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'description_of_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'preferred_qualification',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'salary',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'job_location',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
