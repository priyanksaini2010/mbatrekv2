<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batches-form',
	'enableAjaxValidation'=>false,
    
)); 


$instDetails = Institutes::model()->findByPk($_GET['institute_id']);
$universityCourses = UniversityCourseBatch::model()->findAllByAttributes(array("university_id" => $instDetails->university_id));
$arr  = array();
foreach ($universityCourses as $course) {
    $arr[$course->id] = $course->courser_name."(".$course->courser_batch.")";
}
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php // echo $form->hiddenField($model,'institute_course_id',array('value'=>$_GET['institute_course_id'])); ?>
	<?php echo $form->hiddenField($model,'institute_id',array('value'=>$_GET['institute_id'])); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
	<label for="ModuleWebinar_module_id" class="required">University Course And Batch Mapping <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'university_course_batch_id',  $arr,array('empty'=>'Select University Course And Batch')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
