<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'session-document-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_batch_session_id',array("value"=>$_GET['student_id']),array('class'=>'span5')); ?>
	<?php echo $form->hiddenField($model,'batch_id',array("value"=>$_GET['batch_id']),array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'session_name',array('class'=>'span5','maxlength'=>500)); ?>
	<?php echo $form->textFieldRow($model,'task_assigned',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'link_of_assignment',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->fileFieldRow($model,'your_document',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
