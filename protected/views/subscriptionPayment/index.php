<?php
$this->breadcrumbs=array(
	'Subscription Payments',
);

$this->menu=array(
	array('label'=>'Create SubscriptionPayment','url'=>array('create')),
	array('label'=>'Manage SubscriptionPayment','url'=>array('admin')),
);
?>

<h1>Subscription Payments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
