<?php

$all = getCities();

if ($model->isNewRecord ) {
    $password = generateRandomString();
} else {
    $password = $modelUser->password;
}
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <?php echo $form->errorSummary($modelUser); ?>
        
	<?php echo $form->textFieldRow($modelUser,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'password',array('value'=>$password)); ?>

	<?php echo $form->hiddenField($modelUser,'username',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'date_registered',array('value'=>date("Y-m-d"))); ?>

	<?php echo $form->hiddenField($modelUser,'role',array('value'=>0)); ?>

	<?php echo $form->hiddenField($modelUser,'institute_industry_name',array('value'=>'0')); ?>

	<?php echo $form->textFieldRow($modelUser,'fname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($modelUser,'lname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($modelUser,'phone_number',array('class'=>'span5','maxlength'=>255)); ?>
        <label for="Users_dob">Dob</label>
        <div id="example10_dob"></div>
        <br />
        <label for="Users_city">City</label>
	<?php echo $form->dropDownList($modelUser,'city',$all,array('empty'=>'Select City')); ?><br />
	<?php echo $form->hiddenField($model,'institute_id',array('value'=>$_GET['institute_id'])); ?>
        <?php echo $form->textFieldRow($model,'live_1',array('class'=>'span5','maxlength'=>255)); ?>
        <?php echo $form->textFieldRow($model,'live_2',array('class'=>'span5','maxlength'=>255)); ?>
        <?php echo $form->textFieldRow($model,'live_3',array('class'=>'span5','maxlength'=>255)); ?>
        <?php echo $form->textFieldRow($model,'int_1',array('class'=>'span5','maxlength'=>255)); ?>
        <?php echo $form->textFieldRow($model,'int_2',array('class'=>'span5','maxlength'=>255)); ?>
        <?php echo $form->textFieldRow($model,'int_3',array('class'=>'span5','maxlength'=>255)); ?>

	<?php // echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
