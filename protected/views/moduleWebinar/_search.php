<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'module_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_batch_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_course_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'speaker',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'about_speaker',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'file',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
