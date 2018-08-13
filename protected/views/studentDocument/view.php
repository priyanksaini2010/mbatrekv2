<?php
$this->breadcrumbs=array(
	'Student Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentDocument','url'=>array('index')),
	array('label'=>'Create StudentDocument','url'=>array('create')),
	array('label'=>'Update StudentDocument','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentDocument','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentDocument','url'=>array('admin')),
);
?>

<h1>View StudentDocument #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_id',
		'student_id',
		'document',
	),
)); ?>
