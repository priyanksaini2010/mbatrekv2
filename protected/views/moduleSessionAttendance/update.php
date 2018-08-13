<?php
$this->breadcrumbs=array(
	'Module Session Attendances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModuleSessionAttendance','url'=>array('index')),
	array('label'=>'Create ModuleSessionAttendance','url'=>array('create')),
	array('label'=>'View ModuleSessionAttendance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ModuleSessionAttendance','url'=>array('admin')),
);
?>

<h1>Update ModuleSessionAttendance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>