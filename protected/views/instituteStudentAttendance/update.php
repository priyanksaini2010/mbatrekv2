<?php
$this->breadcrumbs=array(
	'Institute Student Attendances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List instituteStudentAttendance','url'=>array('index')),
	array('label'=>'Create instituteStudentAttendance','url'=>array('create')),
	array('label'=>'View instituteStudentAttendance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage instituteStudentAttendance','url'=>array('admin')),
);
?>

<h1>Update instituteStudentAttendance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>