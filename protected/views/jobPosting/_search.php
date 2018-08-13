<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'industry_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'company_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'function',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_opening',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'description_of_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'preferred_qualification',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'salary',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'job_location',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
