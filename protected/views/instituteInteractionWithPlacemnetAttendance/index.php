<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnet Attendances',
);

$this->menu=array(
	array('label'=>'Create InstituteInteractionWithPlacemnetAttendance','url'=>array('create')),
	array('label'=>'Manage InstituteInteractionWithPlacemnetAttendance','url'=>array('admin')),
);
?>

<h1>Institute Interaction With Placemnet Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
