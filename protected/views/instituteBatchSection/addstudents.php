<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);

$this->menu=array(
	array('label'=>'ManageSections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Sections','url'=>array('instituteBatchSection/create','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Add Student To Sections','url'=>array('instituteBatchSection/addstudents','institute_batch_id'=>$_GET['institute_batch_id'])),

);


?>

<h1>Create Section</h1>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'institute-batch-section-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<select class='form-control' name="section_id">
	    <option value="">Select Section</option>
	<?php //echo $form->errorSummary($model); 
$data = CHtml::listData(InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_REQUEST['institute_batch_id'])),"id", "section_name");
	foreach ($data as $k=>$d) {
	?>
	<option value="<?php echo $k;?>"><?php echo $d;?></option>
	<?php }?>
	</select>
	<ul style="list-style: none">
	<?php //echo $form->errorSummary($model); 
$data = CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id"=>$_REQUEST['institute_batch_id'])),"id", "name");

foreach ($data as $k=>$d) {
?>
	    <li><input type='checkbox' name='student_id[]' value="<?php echo $k;?>" class="form-control"/>&nbsp;<?php echo $d;?></li>
    <?php }?>
	</ul>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=> 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
