<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-student-attendance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>

	<?php echo $form->dropDownList($model,'student_id',  CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])),"id","name") , array("class" => "span5")); ?>
        <label for="InstituteStudentAttendance_date" class="required">Date <span class="required">*</span></label>
        <div id="example10"></div>
        <label for="InstituteStudentAttendance_is_present" class="required">Date <span class="required">*</span></label>
        <?php echo $form->dropDownList($model,'is_present',  array(0=>"No",1=>"Yes") , array("class" => "span5")); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
