<?php
$this->breadcrumbs=array(
	'Colleges'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Colleges','url'=>array('index')),
	array('label'=>'Create Colleges','url'=>array('create')),
	array('label'=>'Update Colleges','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Colleges','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Colleges','url'=>array('admin')),
);
?>

<h1>View Colleges #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
