<?php
$this->breadcrumbs=array(
	'Industry Options'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndustryOption','url'=>array('index')),
	array('label'=>'Create IndustryOption','url'=>array('create')),
	array('label'=>'Update IndustryOption','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete IndustryOption','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndustryOption','url'=>array('admin')),
);
?>

<h1>View IndustryOption #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'option_name',
		'option_number',
	),
)); ?>
