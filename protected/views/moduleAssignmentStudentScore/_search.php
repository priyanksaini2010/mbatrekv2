<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'module_assignment_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'student_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_score',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'student_score',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'close_date',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
