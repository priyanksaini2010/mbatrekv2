<?php
$this->breadcrumbs=array(
	'Coupon Usages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CouponUsage','url'=>array('index')),
	array('label'=>'Manage CouponUsage','url'=>array('admin')),
);
?>

<h1>Create CouponUsage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>