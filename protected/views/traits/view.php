<?php
$this->breadcrumbs=array(
	'Traits'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Traits','url'=>array('index')),
	array('label'=>'Create Traits','url'=>array('create')),
	array('label'=>'Update Traits','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Traits','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Traits','url'=>array('admin')),
);
?>

<h1>View Traits #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'traits',
	),
)); ?>
