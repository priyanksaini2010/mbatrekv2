<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudent','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotificationStudent','url'=>array('create')),
	array('label'=>'View InstituteBatchNotificationStudent','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteBatchNotificationStudent','url'=>array('admin')),
);
?>

<h1>Update InstituteBatchNotificationStudent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>