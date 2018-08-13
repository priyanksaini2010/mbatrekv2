<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-student-rating-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<label for="ModuleWebinar_institute_batch_section_id" class="required">Section <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'module_id',  CHtml::listData(Module::model()->findAll(), "id", "name"),array('empty'=>'Select Module')); ?>

	<?php echo $form->hiddenField($model,'student_id',array('value'=>$_GET['student_id'])); ?>

	<?php echo $form->dropDownList($model,'rating',array(1=>1,2=>2,3=>3,4=>4,5=>5),array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
