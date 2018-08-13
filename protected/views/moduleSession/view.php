<?php
$this->breadcrumbs=array(
	'Module Sessions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ModuleSession','url'=>array('index')),
	array('label'=>'Create ModuleSession','url'=>array('create')),
	array('label'=>'Update ModuleSession','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleSession','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleSession','url'=>array('admin')),
);
?>

<h1>View ModuleSession #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_id',
		'institute_batch_id',
		'agenda',
		'session_plan',
		'date',
		'venue_type',
	),
)); ?>
