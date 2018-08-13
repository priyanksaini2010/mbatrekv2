<?php 
Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-interaction-with-placemnet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'institute_id',array('value'=>$int->institute_id)); ?>

	<?php echo $form->dropDownList($model,'module_id',CHtml::listData(Module::model()->findAll(), "id", "name"),array('class'=>'span5')); ?>
	<label for="ModuleWebinar_module_id" class="required">Date And Time <span class="required">*</span></label>
	<?php // echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); 
	    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('CJuiDateTimePicker',array(
		    'model'=>$model, //Model object
		    'attribute'=>'date_time', //attribute name
			    'mode'=>'datetime', //use "time","date" or "datetime" (default)
		    'language' => 'en',
		    'options'=>array('dateFormat'=>'yy-mm-dd') // jquery plugin options
	    ));

	?>

	<?php echo $form->textFieldRow($model,'topic',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'attendace',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'stream',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'venue',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'agenda',array('class'=>'span5','maxlength'=>255)); ?>
	<label for="ModuleWebinar_module_id" class="required">Type <span class="required">*</span></label>
	<?php 
	$arr = array(1=>"Faculty",2=>"Placement",3=>"Management",4=>"Live Projects");
	
	echo $form->dropDownList($model,'type',$arr,array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'duration',array('class'=>'span5','maxlength'=>255)); ?>
	<label for="ModuleWebinar_module_id" class="required">Open Time <span class="required">*</span></label>
	<?php // echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); 
	    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('CJuiDateTimePicker',array(
		    'model'=>$model, //Model object
		    'attribute'=>'open_time', //attribute name
			    'mode'=>'time', //use "time","date" or "datetime" (default)
		    'language' => 'en',
		    'options'=>array('dateFormat'=>'yy-mm-dd') // jquery plugin options
	    ));

	?>
	
	<label for="ModuleWebinar_module_id" class="required">Close Time <span class="required">*</span></label>
	<?php // echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); 
	    Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('CJuiDateTimePicker',array(
		    'model'=>$model, //Model object
		    'attribute'=>'close_time', //attribute name
			    'mode'=>'time', //use "time","date" or "datetime" (default)
		    'language' => 'en',
		    'options'=>array('dateFormat'=>'yy-mm-dd') // jquery plugin options
	    ));

	?>
	<?php // echo $form->textFieldRow($model,'close_time',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'summary',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
