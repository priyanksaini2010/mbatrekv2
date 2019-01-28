<?php
$this->breadcrumbs=array(
	'Customer Orders'=>array('customerOrder/admin/status/'.$status),
	'Manage',
);

?>

<h1><?php echo $status == 2?"Success":"Failed";?> Orders</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'customer-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'ordfer_hash',
//		'user_id',
		'order_amount',
//		'payment_gateway',
//		'status',
        'date_created',

		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}'
		),
	),
)); ?>
