<?php 
$student = Students::model()->findByPk($_GET['student_id']);
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'student-area-of-improvement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'student_id',array('value'=>$student->user_id)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
