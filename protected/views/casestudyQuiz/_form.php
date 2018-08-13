<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'casestudy-quiz-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'casestudy_id',array('value'=>$_GET['casestudy_id'])); ?>

	<?php echo $form->textFieldRow($model,'question',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'question_score',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
