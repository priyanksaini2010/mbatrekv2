<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'featured-assessment-form',
	'enableAjaxValidation'=>false,
));
$assessments = Assessments::model()->findAllByAttributes(array('status' => 1));
$ddList = array();
foreach ($assessments as  $assessment){
    $ddList[$assessment->id] = $assessment->headline;
}
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	--><?php //echo $form->textFieldRow($model,'assessment_id',array('class'=>'span5')); ?>
    <label for="FeaturedAssessment_assessment_id">Select Assessment</label>
    <?php echo $form->dropDownList($model,'assessment_id',$ddList,array()); ?>

	<?php echo $form->textFieldRow($model,'point_1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'point_2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'point_3',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'point_4',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
