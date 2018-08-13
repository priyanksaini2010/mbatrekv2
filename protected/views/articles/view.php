<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Articles','url'=>array('index')),
	array('label'=>'Create Articles','url'=>array('create')),
	array('label'=>'Update Articles','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Articles','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articles','url'=>array('admin')),
);
?>

<h1>View Articles #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'banner_image',
		'details',
		'type',
	),
)); ?>
