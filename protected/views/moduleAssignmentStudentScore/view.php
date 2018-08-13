<?php
$this->breadcrumbs=array(
	'Module Assignment Student Scores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ModuleAssignmentStudentScore','url'=>array('index')),
	array('label'=>'Create ModuleAssignmentStudentScore','url'=>array('create')),
	array('label'=>'Update ModuleAssignmentStudentScore','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleAssignmentStudentScore','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleAssignmentStudentScore','url'=>array('admin')),
);
?>

<h1>View ModuleAssignmentStudentScore #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_assignment_id',
		'student_id',
		'total_score',
		'student_score',
		'status',
		'close_date',
	),
)); ?>
