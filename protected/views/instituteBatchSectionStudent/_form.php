<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-section-student-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php // echo $form->textFieldRow($model,'institute_batch_section_id',array('class'=>'span5')); ?>
        <label for="ModuleWebinar_institute_batch_section_id" class="required">Section <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'institute_batch_section_id',  CHtml::listData(InstituteBatchSection::model()->findAll(), "id", "section_name"),array('empty'=>'Select Section')); ?>

	<?php echo $form->hiddenField($model,'student_id',array('value'=>$_GET['student_id'])); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
