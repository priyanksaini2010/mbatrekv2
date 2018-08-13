<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'faq-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'question',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	<?php echo $form->dropDownList($model,'type',CHtml::listData( FaqType::model()->findAll(), 'id', 'name'),array('class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'answer',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
