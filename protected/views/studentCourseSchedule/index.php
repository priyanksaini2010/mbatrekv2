<?php
$this->breadcrumbs=array(
	'Student Course Schedules',
);

$this->menu=array(
	array('label'=>'Create StudentCourseSchedule','url'=>array('create')),
	array('label'=>'Manage StudentCourseSchedule','url'=>array('admin')),
);
?>

<h1>Student Course Schedules</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
