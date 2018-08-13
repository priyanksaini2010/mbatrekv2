<?php
$this->breadcrumbs=array(
	'Module Session Attendances',
);

$this->menu=array(
	array('label'=>'Create ModuleSessionAttendance','url'=>array('create')),
	array('label'=>'Manage ModuleSessionAttendance','url'=>array('admin')),
);
?>

<h1>Module Session Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
