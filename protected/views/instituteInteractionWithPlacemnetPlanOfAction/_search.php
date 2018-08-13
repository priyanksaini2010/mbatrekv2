<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_interaction_with_placemnet_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'plan_of_action',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'person_responsible',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'due_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'evidence_of_completion',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
