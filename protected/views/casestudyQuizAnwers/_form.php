<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'casestudy-quiz-anwers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'casestudy_quiz_id',array('value'=>$_GET['casestudy_quiz_id'])); ?>

	<?php echo $form->textFieldRow($model,'answer',array('class'=>'span5','maxlength'=>255)); ?>
        
        <label for="CasestudyQuizAnwers_is_correct" class="required">Is Correct <span class="required">*</span></label>
	<?php echo $form->dropDownList($model,'is_correct',array('0'=>'No','1'=>"Yes"),array("empty" =>"Select if this answer is correct.")); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
