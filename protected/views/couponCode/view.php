<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CouponCode','url'=>array('index')),
	array('label'=>'Create CouponCode','url'=>array('create')),
	array('label'=>'Update CouponCode','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CouponCode','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CouponCode','url'=>array('admin')),
);
?>

<h1>View CouponCode #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'discount_type',
		'domain',
	),
)); ?>
