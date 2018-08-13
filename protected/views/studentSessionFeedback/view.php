<?php
$this->breadcrumbs=array(
	'Student Session Feedbacks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentSessionFeedback','url'=>array('index')),
	array('label'=>'Create StudentSessionFeedback','url'=>array('create')),
	array('label'=>'Update StudentSessionFeedback','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentSessionFeedback','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentSessionFeedback','url'=>array('admin')),
);
?>

<h1>View StudentSessionFeedback #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'session_id',
		'rating',
	),
)); ?>
