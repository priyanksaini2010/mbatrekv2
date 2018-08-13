<?php
$this->breadcrumbs=array(
	'Industry Internships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndustryInternship','url'=>array('index')),
	array('label'=>'Create IndustryInternship','url'=>array('create')),
	array('label'=>'Update IndustryInternship','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete IndustryInternship','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustryInternship','url'=>array('admin')),
);
?>

<h1>View IndustryInternship #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'company_name',
		'function',
		'start_date',
		'end_date',
		'location',
		'stipend',
		'number_of_openings',
		'description_of_project',
	),
)); ?>
