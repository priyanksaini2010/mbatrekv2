<?php
$this->breadcrumbs=array(
	'Module Session Attendances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModuleSessionAttendance','url'=>array('index')),
	array('label'=>'Manage ModuleSessionAttendance','url'=>array('admin')),
);
?>

<h1>Create ModuleSessionAttendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>