<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'assessment-popup-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array("enctype" => "multipart/form-data"),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	--><?php //echo $form->textFieldRow($model,'image',array('class'=>'span5')); ?>
<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>255)); ?>
<?php
if(!$model->isNewRecord) {?>
    <img style='background-color: #f1aa35' src="assets/assements/<?php echo $model->image;?>" height="110px" width="100px"/>
<?php }?>
<!--	--><?php //echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
<br />
<label for="AssessmentPopup_image" class="required">Status <span class="required">*</span></label>
<?php echo $form->dropDownList($model,'status',array(0=>"In-Active",1=>"Active"),array('class'=>'span5','maxlength'=>255)); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
