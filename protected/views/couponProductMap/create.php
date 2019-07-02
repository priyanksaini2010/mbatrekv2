<?php
$this->breadcrumbs=array(
	'Coupon Product Maps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CouponProductMap','url'=>array('index')),
	array('label'=>'Manage CouponProductMap','url'=>array('admin')),
);
?>

<h1>Create CouponProductMap</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>