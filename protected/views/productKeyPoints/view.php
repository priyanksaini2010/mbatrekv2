<?php
$this->breadcrumbs=array(
	'Product Key Points'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductKeyPoints','url'=>array('index')),
	array('label'=>'Create ProductKeyPoints','url'=>array('create')),
	array('label'=>'Update ProductKeyPoints','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductKeyPoints','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductKeyPoints','url'=>array('admin')),
);
?>

<h1>View ProductKeyPoints #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'points',
	),
)); ?>
