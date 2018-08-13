<?php
$this->breadcrumbs=array(
	'Product Sub Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductSubCategory','url'=>array('index')),
	array('label'=>'Create ProductSubCategory','url'=>array('create')),
	array('label'=>'Update ProductSubCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductSubCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductSubCategory','url'=>array('admin')),
);
?>

<h1>View ProductSubCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_category_id',
		'description',
	),
)); ?>
