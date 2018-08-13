<?php
$this->breadcrumbs=array(
	'Institute Student Attendances',
);

$this->menu=array(
	array('label'=>'Create instituteStudentAttendance','url'=>array('create')),
	array('label'=>'Manage instituteStudentAttendance','url'=>array('admin')),
);
?>

<h1>Institute Student Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
