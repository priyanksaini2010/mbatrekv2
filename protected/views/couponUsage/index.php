<?php
$this->breadcrumbs=array(
	'Coupon Usages',
);

$this->menu=array(
	array('label'=>'Create CouponUsage','url'=>array('create')),
	array('label'=>'Manage CouponUsage','url'=>array('admin')),
);
?>

<h1>Coupon Usages</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
