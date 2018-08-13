<?php
$this->breadcrumbs=array(
	'Module Webinars'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ModuleWebinar','url'=>array('index')),
	array('label'=>'Create ModuleWebinar','url'=>array('create')),
	array('label'=>'Update ModuleWebinar','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleWebinar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleWebinar','url'=>array('admin')),
);
?>

<h1>View ModuleWebinar #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_id',
		'institute_batch_id',
		'institute_course_id',
		'type',
		'title',
		'description',
		'speaker',
		'about_speaker',
		'file',
		'date_time',
	),
)); ?>
