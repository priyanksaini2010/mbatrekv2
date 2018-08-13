<?php
$this->breadcrumbs=array(
	'Industry Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndustryUser','url'=>array('index')),
	array('label'=>'Create IndustryUser','url'=>array('create')),
	array('label'=>'Update IndustryUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete IndustryUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustryUser','url'=>array('admin')),
);
?>

<h1>View IndustryUser #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'user_id',
	),
)); ?>
