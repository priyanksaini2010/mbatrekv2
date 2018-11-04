<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'videos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'blog_category_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'background_image',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'banner_image',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'date_created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_updated',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
