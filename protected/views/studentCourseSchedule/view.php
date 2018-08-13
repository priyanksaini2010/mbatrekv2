<?php
$this->breadcrumbs=array(
	'Student Course Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentCourseSchedule','url'=>array('index')),
	array('label'=>'Create StudentCourseSchedule','url'=>array('create')),
	array('label'=>'Update StudentCourseSchedule','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentCourseSchedule','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentCourseSchedule','url'=>array('admin')),
);
?>

<h1>View StudentCourseSchedule #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'notes',
	),
)); ?>
