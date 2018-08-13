<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-course-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_id',array('value'=>$_GET['institute_id'])); ?>
        <?php echo $form->dropDownList($model,'course_id',CHtml::listData(Courses::model()->findAll(), 'id', 'name'), array('empty'=>'Select Course')) ;?>          

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
