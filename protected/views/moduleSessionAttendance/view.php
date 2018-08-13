<?php
$this->breadcrumbs=array(
	'Module Session Attendances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ModuleSessionAttendance','url'=>array('index')),
	array('label'=>'Create ModuleSessionAttendance','url'=>array('create')),
	array('label'=>'Update ModuleSessionAttendance','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleSessionAttendance','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleSessionAttendance','url'=>array('admin')),
);
?>

<h1>View ModuleSessionAttendance #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_session_id',
		'total_students',
		'total_attended',
	),
)); ?>
