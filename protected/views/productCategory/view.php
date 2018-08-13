<?php
$this->breadcrumbs=array(
	'Product Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductCategory','url'=>array('index')),
	array('label'=>'Create ProductCategory','url'=>array('create')),
	array('label'=>'Update ProductCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductCategory','url'=>array('admin')),
);
?>

<h1>View ProductCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
	),
)); ?>
