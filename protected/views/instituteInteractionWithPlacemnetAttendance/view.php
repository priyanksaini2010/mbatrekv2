<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnet Attendances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteInteractionWithPlacemnetAttendance','url'=>array('index')),
	array('label'=>'Create InstituteInteractionWithPlacemnetAttendance','url'=>array('create')),
	array('label'=>'Update InstituteInteractionWithPlacemnetAttendance','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteInteractionWithPlacemnetAttendance','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteInteractionWithPlacemnetAttendance','url'=>array('admin')),
);
?>

<h1>View InstituteInteractionWithPlacemnetAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_interaction_with_placemnet_id',
		'member_name',
	),
)); ?>
