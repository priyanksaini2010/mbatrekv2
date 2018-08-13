<?php
$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Students','url'=>array('index')),
	array('label'=>'Create Students','url'=>array('create')),
	array('label'=>'Update Students','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Students','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Students','url'=>array('admin')),
);
?>

<h1>View Students #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'institute_batch_id',
		'profile_json',
		'user_id',
	),
)); ?>
