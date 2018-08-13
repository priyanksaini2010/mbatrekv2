<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Student Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudentPost','url'=>array('index')),
	array('label'=>'Manage InstituteBatchNotificationStudentPost','url'=>array('admin')),
);
?>

<h1>Create InstituteBatchNotificationStudentPost</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>