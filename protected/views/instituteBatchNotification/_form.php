<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-notification-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>
	<?php echo $form->hiddenField($model,'status',array('value'=>1)); ?>
	<?php echo $form->dropDownList($model,'institute_batch_session_id',  CHtml::listData(InstituteBatchSession::model()->findAllByAttributes(array('institute_batch_id'=>$_GET['institute_batch_id'])), "id", "session_name"),array('empty'=>'Select Session')); ?>

	<?php echo $form->dropDownList($model,'type',  array(1=>"Pre Session",2=>"Post Session"),array('empty'=>'Select Notification Type')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
