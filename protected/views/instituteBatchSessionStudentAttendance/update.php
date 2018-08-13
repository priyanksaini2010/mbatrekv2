<?php
$this->breadcrumbs=array(
	'Institute Batch Session Student Attendances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteBatchSessionStudentAttendance','url'=>array('index')),
	array('label'=>'Create InstituteBatchSessionStudentAttendance','url'=>array('create')),
	array('label'=>'View InstituteBatchSessionStudentAttendance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteBatchSessionStudentAttendance','url'=>array('admin')),
);
?>

<h1>Update InstituteBatchSessionStudentAttendance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>