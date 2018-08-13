<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);

$this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Add Students','url'=>array('students/create','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Upload Students','url'=>array('users/uploadstudents','institute_batch_id'=>$_GET['institute_batch_id'])),
        
);

?>
<h1>Upload Students</h1>
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
