<?php
$this->breadcrumbs=array(
	'Student Area Of Improvements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentAreaOfImprovement','url'=>array('index')),
	array('label'=>'Create StudentAreaOfImprovement','url'=>array('create')),
	array('label'=>'Update StudentAreaOfImprovement','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentAreaOfImprovement','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentAreaOfImprovement','url'=>array('admin')),
);
?>

<h1>View StudentAreaOfImprovement #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'notes',
	),
)); ?>
