<?php

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institutes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?><br />
	<?php echo $form->textFieldRow($model,'support_email',array('class'=>'span5','maxlength'=>255)); ?><br />
        <?php echo $form->dropDownList($model,'university_id',CHtml::listData(Universities::model()->findAll(), 'id', 'name'), array('empty'=>'Select University')) ;?>          

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
