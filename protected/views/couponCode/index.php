<?php
$this->breadcrumbs=array(
	'Coupon Codes',
);

$this->menu=array(
	array('label'=>'Create CouponCode','url'=>array('create')),
	array('label'=>'Manage CouponCode','url'=>array('admin')),
);
?>

<h1>Coupon Codes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
