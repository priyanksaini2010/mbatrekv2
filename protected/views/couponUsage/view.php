<?php
$this->breadcrumbs=array(
	'Coupon Usages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CouponUsage','url'=>array('index')),
	array('label'=>'Create CouponUsage','url'=>array('create')),
	array('label'=>'Update CouponUsage','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CouponUsage','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CouponUsage','url'=>array('admin')),
);
?>

<h1>View CouponUsage #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'coupon_id',
		'email_used',
		'users_new_id',
		'date_created',
	),
)); ?>
