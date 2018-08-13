<?php
$this->breadcrumbs=array(
	'Institute Batch Session Student Attendances',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchSessionStudentAttendance','url'=>array('create')),
	array('label'=>'Manage InstituteBatchSessionStudentAttendance','url'=>array('admin')),
);
?>

<h1>Institute Batch Session Student Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
