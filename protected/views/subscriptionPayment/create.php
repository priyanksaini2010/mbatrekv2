<?php
$this->breadcrumbs=array(
	'Subscription Payments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubscriptionPayment','url'=>array('index')),
	array('label'=>'Manage SubscriptionPayment','url'=>array('admin')),
);
?>

<h1>Create SubscriptionPayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>