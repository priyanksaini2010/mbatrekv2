<?php
$this->breadcrumbs=array(
	'Institute Batch Notifications'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotification','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotification','url'=>array('create')),
	array('label'=>'Update InstituteBatchNotification','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchNotification','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchNotification','url'=>array('admin')),
);
?>

<h1>View InstituteBatchNotification #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_id',
		'message',
	),
)); ?>
