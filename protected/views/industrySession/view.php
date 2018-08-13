<?php
$this->breadcrumbs=array(
	'Industry Sessions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndustrySession','url'=>array('index')),
	array('label'=>'Create IndustrySession','url'=>array('create')),
	array('label'=>'Update IndustrySession','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete IndustrySession','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustrySession','url'=>array('admin')),
);
?>

<h1>View IndustrySession #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'industry_id',
		'thought',
	),
)); ?>
