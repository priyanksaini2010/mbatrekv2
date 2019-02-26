<?php
$this->breadcrumbs=array(
	'Customer Orders'=>array('customerOrder/admin/status/'.$status),
	'Manage',
);

?>

<h1><?php echo $status == 2?"Successful":"Failed";?> Orders</h1>
<?php if(Yii::app()->user->admin == 4){?>
<!--<form method="post" action="--><?php //echo Yii::app()->createUrl("customerOrder/admin/status/".$status."/task/xls");?><!-- ">-->
    <input readonly="readonly" type="text" class="input-large" name="date_range" id="date-range" placeholder="Date range"/>
    <button class="btn btn-info" id="export" type="button">Export To Excel</button>
<!--</form>-->
<?php } else{?>
<a href="<?php echo Yii::app()->createUrl("customerOrder/admin/status/".$status."/task/xls");?>"> <button class="btn btn-info" >Export To Excel</button></a>
<?php }?>
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
<script>
    $('input[id="date-range"]').daterangepicker({
        locale: {
            format: 'YYYY-MM-DD',
        }

    });
    $("#export").click(function(){
        window.location.href = "<?php echo Yii::app()->createUrl("customerOrder/admin/status/".$status."/task/xls");?>"+"/date/"+$("#date-range").val();
    });
</script>