<?php
$this->breadcrumbs=array(
	'Student To Dos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentToDo','url'=>array('index')),
	array('label'=>'Create StudentToDo','url'=>array('create')),
	array('label'=>'Update StudentToDo','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentToDo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentToDo','url'=>array('admin')),
);
?>

<h1>View StudentToDo #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'module_id',
		'due_date',
		'open_date',
		'close_date',
	),
)); ?>
