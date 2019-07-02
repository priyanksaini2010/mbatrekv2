<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('couponCode/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage  Coupon Code','url'=>array('couponCode/admin')),
	array('label'=>'Create Coupon Code','url'=>array('couponCode/create')),
);
?>

<h1>Create Coupon Code</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>