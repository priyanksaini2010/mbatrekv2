<?php
$this->breadcrumbs=array(
	'Product Engages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductEngage','url'=>array('index')),
	array('label'=>'Create ProductEngage','url'=>array('create')),
	array('label'=>'Update ProductEngage','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductEngage','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductEngage','url'=>array('admin')),
);
?>

<h1>View ProductEngage #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'description',
		'icon',
	),
)); ?>
