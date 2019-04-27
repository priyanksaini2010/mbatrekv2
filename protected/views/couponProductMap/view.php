<?php
$this->breadcrumbs=array(
	'Coupon Product Maps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CouponProductMap','url'=>array('index')),
	array('label'=>'Create CouponProductMap','url'=>array('create')),
	array('label'=>'Update CouponProductMap','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CouponProductMap','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CouponProductMap','url'=>array('admin')),
);
?>

<h1>View CouponProductMap #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'coupon_id',
		'product_id',
	),
)); ?>
