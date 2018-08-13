<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_batch_session_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'task_assigned',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'link_of_assignment',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'your_document',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
