<?php
$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Videos','url'=>array('index')),
	array('label'=>'Create Videos','url'=>array('create')),
	array('label'=>'Update Videos','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Videos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Videos','url'=>array('admin')),
);
?>

<h1>View Videos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'iframe',
		'tag_line',
	),
)); ?>
