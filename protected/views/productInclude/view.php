<?php
$this->breadcrumbs=array(
	'Product Includes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductInclude','url'=>array('index')),
	array('label'=>'Create ProductInclude','url'=>array('create')),
	array('label'=>'Update ProductInclude','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductInclude','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductInclude','url'=>array('admin')),
);
?>

<h1>View ProductInclude #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'description',
		'logo',
	),
)); ?>
