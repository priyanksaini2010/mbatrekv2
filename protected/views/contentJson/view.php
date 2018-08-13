<?php
$this->breadcrumbs=array(
	'Content Jsons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ContentJson','url'=>array('index')),
	array('label'=>'Create ContentJson','url'=>array('create')),
	array('label'=>'Update ContentJson','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ContentJson','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContentJson','url'=>array('admin')),
);
?>

<h1>View ContentJson #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page',
		'data',
	),
)); ?>
