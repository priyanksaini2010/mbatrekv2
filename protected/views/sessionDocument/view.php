<?php
$this->breadcrumbs=array(
	'Session Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SessionDocument','url'=>array('index')),
	array('label'=>'Create SessionDocument','url'=>array('create')),
	array('label'=>'Update SessionDocument','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete SessionDocument','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SessionDocument','url'=>array('admin')),
);
?>

<h1>View SessionDocument #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_session_id',
		'task_assigned',
		'link_of_assignment',
		'your_document',
	),
)); ?>
