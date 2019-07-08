<?php
$this->breadcrumbs=array(
	'Coupon Product Maps',
);

$this->menu=array(
	array('label'=>'Create CouponProductMap','url'=>array('create')),
	array('label'=>'Manage CouponProductMap','url'=>array('admin')),
);
?>

<h1>Coupon Product Maps</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
