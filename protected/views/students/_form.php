<?php
$all = getCities();

$function = array("Finance"=>"Finance","IT"=>"IT","Marketing"=>"Marketing","HR"=>"HR","Operations"=>"Operations","Others"=>"Others");
$exp = array("Fresher"=>"Fresher","1-2 Years"=>"1-2 Years","2-3 Years"=>"2-3 Years","More Than 3 Years"=>"More Than 3 Years");
$acc = array("B.Com"=>"B.Com","B.Tech"=>"B.Tech","BBA"=>"BBA","BCA"=>"BCA","BSC"=>"BSC","Others"=>"Others");
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
));


if ($model->isNewRecord ) {
    $password = generateRandomString();
} else {
    $password = $modelUser->password;
}
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model);   ?>
        <?php echo $form->errorSummary($modelUser); ?>
        
	<?php echo $form->textFieldRow($modelUser,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'password',array('value'=>$password)); ?>

	<?php echo $form->hiddenField($modelUser,'username',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'date_registered',array('value'=>date("Y-m-d"))); ?>

	<?php echo $form->hiddenField($modelUser,'role',array('value'=>0)); ?>

	<?php echo $form->hiddenField($modelUser,'institute_industry_name',array('value'=>'0')); ?>
	<?php echo $form->hiddenField($modelUser,'institute_id',array('value'=>$int->instituteCourse->institute->id)); ?>

	<?php echo $form->textFieldRow($modelUser,'fname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($modelUser,'lname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($modelUser,'phone_number',array('class'=>'span5','maxlength'=>255)); ?>
        <label for="Users_dob">Dob</label>
        <div id="example10_dob"></div>
	<?php 
      
//        echo $form->textFieldRow($modelUser,'dob',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($modelUser,'institute_email_address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'institute',array('class'=>'span5','maxlength'=>255)); ?>
        <br />
        <label for="Users_city">City</label>
	<?php echo $form->dropDownList($modelUser,'city',$all,array('empty'=>'Select City')); ?><br />
	<label for="Users_city">Functions</label>
	<?php echo $form->dropDownList($model,'function',$function,array('empty'=>'Select Function')); ?><br />
	<label for="Users_city">Work Experience</label>
	<?php echo $form->dropDownList($model,'work_exerience',$exp,array('empty'=>'Select Work Experience')); ?><br />
	<label for="Users_city">Academic Background</label>
	<?php echo $form->dropDownList($model,'academic_background',$acc,array('empty'=>'Select Academic Background')); ?><br />
	
	<?php echo $form->textFieldRow($modelUser,'program',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'batch',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($modelUser,'is_approve',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modelUser,'is_verified',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modelUser,'last_login',array('value'=> date("Y-m-d h:i:s"))); ?>
        
	<?php // echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>

	<?php echo $form->hiddenField($model,'profile_json',array('value'=>json_encode(array()))); ?>

	<?php echo $form->hiddenField($model,'user_id',array('value'=>'0')); ?>
        

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
