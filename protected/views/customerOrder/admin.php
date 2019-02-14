<?php
$this->breadcrumbs=array(
	'Customer Orders'=>array('customerOrder/admin/status/'.$status),
	'Manage',
);

?>

<h1><?php echo $status == 2?"Success":"Failed";?> Orders</h1>

<a href="<?php echo Yii::app()->createUrl("customerOrder/admin/status/".$status."/task/xls");?>"> <button class="btn btn-info" h">Export To Excel</button></a>
<?php
$grid =  $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'customer-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'ordfer_hash',
        array(
                        'header'=>"User",
                        "name"=>'user_id',
                        "value"=>'UsersNew::model()->findByAttributes(array("id"=>$data->user_id))->full_name',
                        'filter'=>CHtml::listData( UsersNew::model()->findAll(), 'id', 'full_name'),
                    ),
        array(
            'header'=>"User's Email",
            "value"=>'UsersNew::model()->findByAttributes(array("id"=>$data->user_id))->email',
            'filter'=>CHtml::listData( UsersNew::model()->findAll(), 'id', 'email'),
        ),
        array(
            'header'=>"User's Phonenumber",
            "value"=>'UsersNew::model()->findByAttributes(array("id"=>$data->user_id))->mobile_number',
            'filter'=>CHtml::listData( UsersNew::model()->findAll(), 'id', 'mobile_number'),
        ),
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
));



?>
