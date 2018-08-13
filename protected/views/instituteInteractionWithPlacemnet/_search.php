<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'institute_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'module_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'topic',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'stream',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'venue',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'agenda',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'duration',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'open_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'close_time',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'summary',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
