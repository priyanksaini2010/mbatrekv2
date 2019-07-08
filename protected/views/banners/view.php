<?php
$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Banners','url'=>array('index')),
	array('label'=>'Create Banners','url'=>array('create')),
	array('label'=>'Update Banners','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Banners','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banners','url'=>array('admin')),
);
?>

<h1>View Banners #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
	),
)); ?>
