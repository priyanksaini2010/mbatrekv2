<?php
$this->breadcrumbs=array(
	'Coupon Product Maps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CouponProductMap','url'=>array('index')),
	array('label'=>'Create CouponProductMap','url'=>array('create')),
	array('label'=>'View CouponProductMap','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CouponProductMap','url'=>array('admin')),
);
?>

<h1>Update CouponProductMap <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>