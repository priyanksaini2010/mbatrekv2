<?php
$this->breadcrumbs=array(
	'Product Key Outcomes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductKeyOutcome','url'=>array('index')),
	array('label'=>'Create ProductKeyOutcome','url'=>array('create')),
	array('label'=>'Update ProductKeyOutcome','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductKeyOutcome','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductKeyOutcome','url'=>array('admin')),
);
?>

<h1>View ProductKeyOutcome #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'description',
		'icon',
	),
)); ?>
