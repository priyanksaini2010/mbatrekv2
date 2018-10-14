<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'success-story-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php
        $ar = array(1=>"Placement Coordinators",2=>"Students ",3=>"Young Professionals");
        echo $form->dropDownList($model, 'type', $ar, array('class' => 'span3')); ?>

	<?php
        
        $ar = array(1=>"Left Part",2=>"Right Part");
         echo $form->dropDownList($model, 'sub_type', $ar, array('class' => 'span3')); ?>

	<?php echo $form->textFieldRow($model,'college_or_company',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'course',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'video_url',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
