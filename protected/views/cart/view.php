<?php
$this->breadcrumbs=array(
	'Carts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cart','url'=>array('index')),
	array('label'=>'Create Cart','url'=>array('create')),
	array('label'=>'Update Cart','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Cart','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cart','url'=>array('admin')),
);
?>

<h1>View Cart #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'product_id',
		'date_created',
		'status',
	),
)); ?>
