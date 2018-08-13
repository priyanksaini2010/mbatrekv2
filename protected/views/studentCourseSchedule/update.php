<?php
$this->breadcrumbs=array(
	'Student Course Schedules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentCourseSchedule','url'=>array('index')),
	array('label'=>'Create StudentCourseSchedule','url'=>array('create')),
	array('label'=>'View StudentCourseSchedule','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentCourseSchedule','url'=>array('admin')),
);
?>

<h1>Update StudentCourseSchedule <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>