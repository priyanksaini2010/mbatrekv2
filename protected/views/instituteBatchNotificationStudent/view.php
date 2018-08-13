<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudent','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotificationStudent','url'=>array('create')),
	array('label'=>'Update InstituteBatchNotificationStudent','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchNotificationStudent','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchNotificationStudent','url'=>array('admin')),
);
?>

<h1>View InstituteBatchNotificationStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_notification_id',
		'student_id',
		'is_shown',
	),
)); ?>
