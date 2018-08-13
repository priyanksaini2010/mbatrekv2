<?php
$this->breadcrumbs=array(
	'Institute Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteUser','url'=>array('index')),
	array('label'=>'Create InstituteUser','url'=>array('create')),
	array('label'=>'Update InstituteUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteUser','url'=>array('admin')),
);
?>

<h1>View InstituteUser #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_id',
		'user_id',
	),
)); ?>
