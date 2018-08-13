<?php
$this->breadcrumbs=array(
	'Institute Courses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteCourse','url'=>array('index')),
	array('label'=>'Create InstituteCourse','url'=>array('create')),
	array('label'=>'Update InstituteCourse','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteCourse','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteCourse','url'=>array('admin')),
);
?>

<h1>View InstituteCourse #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_id',
		'course_id',
	),
)); ?>
