<?php
$this->breadcrumbs=array(
	'Module Student Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ModuleStudentRating','url'=>array('index')),
	array('label'=>'Create ModuleStudentRating','url'=>array('create')),
	array('label'=>'Update ModuleStudentRating','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleStudentRating','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleStudentRating','url'=>array('admin')),
);
?>

<h1>View ModuleStudentRating #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_id',
		'student_id',
		'rating',
	),
)); ?>
