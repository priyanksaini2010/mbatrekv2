<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('banners/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Banners','url'=>array('banners/admin')),
	array('label'=>'Create Banners','url'=>array('banners/create')),
);
?>

<h1>Manage Banners</h1>

<p>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'banners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'image',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}"
		),
	),
)); ?>
