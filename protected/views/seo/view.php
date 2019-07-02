<?php
$this->breadcrumbs=array(
	'Seos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Seo','url'=>array('index')),
	array('label'=>'Create Seo','url'=>array('create')),
	array('label'=>'Update Seo','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Seo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seo','url'=>array('admin')),
);
?>

<h1>View Seo #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'meta_keywords',
		'meta_tags',
		'meta_description',
	),
)); ?>
