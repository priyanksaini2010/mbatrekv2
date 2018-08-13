<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'industry_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'campus',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'company_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_students',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_deliverables',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'stipend',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'function',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'start_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end_date',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
