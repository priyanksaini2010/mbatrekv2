<?php
$this->breadcrumbs=array(
	'Institute Courses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteCourses','url'=>array('index')),
	array('label'=>'Create InstituteCourses','url'=>array('create')),
	array('label'=>'Update InstituteCourses','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteCourses','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteCourses','url'=>array('admin')),
);
?>

<h1>View InstituteCourses #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_id',
		'details',
	),
)); ?>
