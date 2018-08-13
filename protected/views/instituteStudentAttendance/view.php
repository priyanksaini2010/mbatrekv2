<?php
$this->breadcrumbs=array(
	'Institute Student Attendances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List instituteStudentAttendance','url'=>array('index')),
	array('label'=>'Create instituteStudentAttendance','url'=>array('create')),
	array('label'=>'Update instituteStudentAttendance','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete instituteStudentAttendance','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage instituteStudentAttendance','url'=>array('admin')),
);
?>

<h1>View instituteStudentAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_id',
		'student_id',
		'date',
	),
)); ?>
