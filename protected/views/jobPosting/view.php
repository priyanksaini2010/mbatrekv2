<?php
$this->breadcrumbs=array(
	'Job Postings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobPosting','url'=>array('index')),
	array('label'=>'Create JobPosting','url'=>array('create')),
	array('label'=>'Update JobPosting','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete JobPosting','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobPosting','url'=>array('admin')),
);
?>

<h1>View JobPosting #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'company_name',
		'function',
		'position',
		'number_of_opening',
		'description_of_job',
		'preferred_qualification',
		'salary',
		'job_location',
	),
)); ?>
