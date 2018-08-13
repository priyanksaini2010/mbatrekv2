<?php 
Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-interaction-with-placemnet-plan-of-action-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array("enctype"=>"multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->hiddenField($model,'institute_interaction_with_placemnet_id',array('value'=>$_GET['interaction_id'])); ?>

	<?php echo $form->textFieldRow($model,'plan_of_action',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'person_responsible',array('class'=>'span5','maxlength'=>255)); ?>

	<?php // echo $form->textFieldRow($model,'due_date',array('class'=>'span5')); ?>
	<label for="ModuleWebinar_module_id" class="required">Due Date <span class="required">*</span></label>
	<?php // echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); 
	    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('CJuiDateTimePicker',array(
		    'model'=>$model, //Model object
		    'attribute'=>'due_date', //attribute name
			    'mode'=>'date', //use "time","date" or "datetime" (default)
		    'language' => 'en',
		    'options'=>array('dateFormat'=>'yy-mm-dd'), // jquery plugin options
		    'htmlOptions' => array("class"=>"span5")
	    ));

	?>

	<?php echo $form->fileFieldRow($model,'evidence_of_completion',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
