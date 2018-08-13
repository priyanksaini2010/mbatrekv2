<?php
$this->breadcrumbs=array(
	'Ebrouchers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Ebrouchers','url'=>array('index')),
	array('label'=>'Create Ebrouchers','url'=>array('create')),
	array('label'=>'Update Ebrouchers','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Ebrouchers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ebrouchers','url'=>array('admin')),
);
?>

<h1>View Ebrouchers #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'name',
		'file',
	),
)); ?>
