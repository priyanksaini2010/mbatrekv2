<?php
$this->breadcrumbs=array(
	'Subscription Payments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubscriptionPayment','url'=>array('index')),
	array('label'=>'Create SubscriptionPayment','url'=>array('create')),
	array('label'=>'Update SubscriptionPayment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete SubscriptionPayment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubscriptionPayment','url'=>array('admin')),
);
?>

<h1>View SubscriptionPayment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_id',
		'user_id',
		'amount',
		'subscription',
		'status',
		'tx_date',
		'paytm_response',
	),
)); ?>
