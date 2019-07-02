<?php
$this->breadcrumbs=array(
	'Year Of Graduations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List YearOfGraduation','url'=>array('index')),
	array('label'=>'Create YearOfGraduation','url'=>array('create')),
	array('label'=>'Update YearOfGraduation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete YearOfGraduation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YearOfGraduation','url'=>array('admin')),
);
?>

<h1>View YearOfGraduation #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'year',
	),
)); ?>
