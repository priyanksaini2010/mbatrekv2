<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'date_registered',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'role',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_industry_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'phone_number',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'dob',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_email_address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'institute',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'program',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'batch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'is_approve',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'is_verified',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'last_login',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
