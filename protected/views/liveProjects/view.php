<?php
$this->breadcrumbs=array(
	'Live Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LiveProjects','url'=>array('index')),
	array('label'=>'Create LiveProjects','url'=>array('create')),
	array('label'=>'Update LiveProjects','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete LiveProjects','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LiveProjects','url'=>array('admin')),
);
?>

<h1>View LiveProjects #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'campus',
		'city',
		'company_name',
		'number_of_students',
		'project_deliverables',
		'stipend',
		'function',
		'start_date',
		'end_date',
	),
)); ?>
