<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'module-assignment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<label for="ModuleWebinar_module_id" class="required">Module <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'module_id',  CHtml::listData(Module::model()->findAll(), "id", "name"),array('empty'=>'Select Module')); ?>


	<?php echo $form->hiddenField($model,'institute_batch_id',array('value'=>$_GET['institute_batch_id'])); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<label for="ModuleAssignment_due_date" class="required">Due Date <span class="required">*</span></label>
        <div id="example11"></div>
	<label for="ModuleAssignment_close_date" class="required">Close Date <span class="required">*</span></label>
        <div id="example12"></div>
	<label for="ModuleAssignment_open_date" class="required">Open Date <span class="required">*</span></label>
        <div id="example13"></div>
	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
