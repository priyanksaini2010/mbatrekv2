<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('couponCode/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage  Coupon Code','url'=>array('couponCode/admin')),
	array('label'=>'Create Coupon Code','url'=>array('couponCode/create')),
);
?>

<h1>Manage Coupon Codes</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'coupon-code-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'domain',
		array(
                        'header'=>"Discount Type",
                        "name"=>'discount_type',
                        "value"=>'$data->discount_type==1?"Percentage":"Flat"',
                        'filter'=>array(1=>"Percentage",2=>"Flat"),
                ),
                "discount",
            array(
                        'header'=>"Is Active",
                        "name"=>'is_active',
                        "value"=>'$data->is_active==1?"Active":"De-Active"',
                        'filter'=>array(1=>"Active",2=>"De-Active"),
                ),
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
