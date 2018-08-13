<?php
$this->breadcrumbs=array(
	'Student Resumes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentResume','url'=>array('index')),
	array('label'=>'Create StudentResume','url'=>array('create')),
	array('label'=>'Update StudentResume','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentResume','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentResume','url'=>array('admin')),
);
?>

<h1>View StudentResume #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'educational_qualification',
		'project_undertaken',
		'achievement_and_key_skills',
		'hobbies',
		'personal_details',
		'header',
		'objective',
	),
)); ?>
