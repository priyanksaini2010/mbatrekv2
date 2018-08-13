<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'articles-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->fileFieldRow($model,'image',array('class'=>'span5','maxlength'=>1155)); ?>
        <img src="assets/eBrouchers/<?php echo $model->image; ?>" height="50px" width="100px"/>
	<?php echo $form->fileFieldRow($model,'banner_image',array('class'=>'span5','maxlength'=>1155)); ?>
        <img src="assets/eBrouchers/<?php echo $model->banner_image; ?>" height="50px" width="100px"/>
	<?php echo $form->textAreaRow($model,'details',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->hiddenField($model,'type',array('value'=>$_GET['type'])); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
