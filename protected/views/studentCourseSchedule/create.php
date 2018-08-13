<?php
$this->breadcrumbs=array(
	'Student Course Schedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentCourseSchedule','url'=>array('index')),
	array('label'=>'Manage StudentCourseSchedule','url'=>array('admin')),
);
?>

<h1>Create StudentCourseSchedule</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>