<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Student Posts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudentPost','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotificationStudentPost','url'=>array('create')),
	array('label'=>'View InstituteBatchNotificationStudentPost','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteBatchNotificationStudentPost','url'=>array('admin')),
);
?>

<h1>Update InstituteBatchNotificationStudentPost <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>