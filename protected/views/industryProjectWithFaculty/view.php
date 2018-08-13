<?php
$this->breadcrumbs=array(
	'Industry Project With Faculties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndustryProjectWithFaculty','url'=>array('index')),
	array('label'=>'Create IndustryProjectWithFaculty','url'=>array('create')),
	array('label'=>'Update IndustryProjectWithFaculty','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete IndustryProjectWithFaculty','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustryProjectWithFaculty','url'=>array('admin')),
);
?>

<h1>View IndustryProjectWithFaculty #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'assignment_title',
		'deliverable_requirement',
		'desired_experience',
		'budget',
		'time_scedule',
	),
)); ?>
