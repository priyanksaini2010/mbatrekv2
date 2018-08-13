<?php
$this->breadcrumbs=array(
	'Student Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentScore','url'=>array('index')),
	array('label'=>'Create StudentScore','url'=>array('create')),
	array('label'=>'Update StudentScore','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentScore','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentScore','url'=>array('admin')),
);
?>

<h1>View StudentScore #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'module_id',
		'student_score',
		'college_score',
		'university_score',
	),
)); ?>
