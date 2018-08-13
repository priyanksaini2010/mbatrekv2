<?php
$this->breadcrumbs=array(
	'Institute Batch Session Student Attendances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchSessionStudentAttendance','url'=>array('index')),
	array('label'=>'Create InstituteBatchSessionStudentAttendance','url'=>array('create')),
	array('label'=>'Update InstituteBatchSessionStudentAttendance','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchSessionStudentAttendance','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchSessionStudentAttendance','url'=>array('admin')),
);
?>

<h1>View InstituteBatchSessionStudentAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_session_id',
		'student_id',
		'is_present',
		'session_date',
	),
)); ?>
