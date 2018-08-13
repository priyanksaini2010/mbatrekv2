<?php
$this->breadcrumbs=array(
	'industries'=>array('industries/admin'),
	'Upload',
);

$this->menu=array(
	array('label'=>'Manage Industries','url'=>array('industries/admin')),
        array('label'=>'Create Industry','url'=>array('industries/create')),
        array('label'=>'Upload Industry','url'=>array('users/uploadindustry')),
);
?>
<h1>Upload Industries</h1>
<?php

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->fileFieldRow($model,'username',array('class'=>'span5','maxlength'=>1000)); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Upload',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
