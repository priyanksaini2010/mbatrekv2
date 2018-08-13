<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-notification-student-post-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'institute_batch_notification_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'student_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'is_shown',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mentor',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'Agreement_with_session_and_mentor',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'Expectations_met',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'Learning_from_colleagues',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'Real_situation_applicability',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'rating',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
