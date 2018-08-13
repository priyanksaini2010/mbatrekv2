<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-student-session-remark-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php
	echo $form->textFieldRow($model,'feedback_by',array( 'class'=>'span8'));
	$filter = CHtml::listData(InstituteBatchSession::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])), "id", "session_name");
	echo $form->dropDownList($model,'institute_batch_session_id',$filter,array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'student_Id',array('value'=>$_GET['student_id'])); ?>

	<?php echo $form->textAreaRow($model,'current_performance',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'past_performance',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->hiddenField($model,'response',array('value'=>"Not Used")); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
