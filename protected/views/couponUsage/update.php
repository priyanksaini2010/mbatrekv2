<?php
$this->breadcrumbs=array(
	'Coupon Usages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CouponUsage','url'=>array('index')),
	array('label'=>'Create CouponUsage','url'=>array('create')),
	array('label'=>'View CouponUsage','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CouponUsage','url'=>array('admin')),
);
?>

<h1>Update CouponUsage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>