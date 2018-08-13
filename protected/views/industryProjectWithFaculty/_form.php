<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'industry-project-with-faculty-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'industry_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'assignment_title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'deliverable_requirement',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'desired_experience',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'budget',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'time_scedule',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
