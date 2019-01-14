<?php
$this->breadcrumbs=array(
	'Customer Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CustomerOrder','url'=>array('index')),
	array('label'=>'Create CustomerOrder','url'=>array('create')),
	array('label'=>'Update CustomerOrder','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CustomerOrder','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerOrder','url'=>array('admin')),
);
?>

<h1>View CustomerOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ordfer_hash',
		'user_id',
		'order_amount',
		'payment_gateway',
		'status',
		'date_created',
	),
)); ?>
