<?php
$this->breadcrumbs=array(
	'Subscription Payments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubscriptionPayment','url'=>array('index')),
	array('label'=>'Create SubscriptionPayment','url'=>array('create')),
	array('label'=>'View SubscriptionPayment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage SubscriptionPayment','url'=>array('admin')),
);
?>

<h1>Update SubscriptionPayment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>