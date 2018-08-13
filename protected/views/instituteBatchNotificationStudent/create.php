<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudent','url'=>array('index')),
	array('label'=>'Manage InstituteBatchNotificationStudent','url'=>array('admin')),
);
?>

<h1>Create InstituteBatchNotificationStudent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>