<?php
$this->breadcrumbs=array(
	'Products'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Products','url'=>array('products/admin')),
	array('label'=>'Create Products','url'=>array('products/create')),
);
?>

<h1>Manage Products</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'title',
		array(
                        'header'=>"Category",
                        "name"=>'product_sub_category_id',
                        "value"=>'ProductCategory::model()->findByAttributes(array("id"=>$data->product_sub_category_id))->category',
                        'filter'=>CHtml::listData( ProductCategory::model()->findAll(), 'id', 'category'),
                    ),
		'actuall_price',
		'price',
		/*
		'type',
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
