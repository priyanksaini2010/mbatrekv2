<?php
$this->breadcrumbs=array(
	'University Course Batches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UniversityCourseBatch','url'=>array('index')),
	array('label'=>'Create UniversityCourseBatch','url'=>array('create')),
	array('label'=>'Update UniversityCourseBatch','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete UniversityCourseBatch','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UniversityCourseBatch','url'=>array('admin')),
);
?>

<h1>View UniversityCourseBatch #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'university_id',
		'courser_name',
		'courser_batch',
	),
)); ?>
