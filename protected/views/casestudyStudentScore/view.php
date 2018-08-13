<?php
$this->breadcrumbs=array(
	'Casestudy Student Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CasestudyStudentScore','url'=>array('index')),
	array('label'=>'Create CasestudyStudentScore','url'=>array('create')),
	array('label'=>'Update CasestudyStudentScore','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CasestudyStudentScore','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CasestudyStudentScore','url'=>array('admin')),
);
?>

<h1>View CasestudyStudentScore #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'casestudy_id',
		'student_id',
		'total_score',
		'student_score',
		'completion_date',
	),
)); ?>
