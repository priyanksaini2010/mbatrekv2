<?php
$this->breadcrumbs=array(
	'Event Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EventCategory','url'=>array('index')),
	array('label'=>'Create EventCategory','url'=>array('create')),
	array('label'=>'Update EventCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EventCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventCategory','url'=>array('admin')),
);
?>

<h1>View EventCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
