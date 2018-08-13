<?php
$this->breadcrumbs=array(
	'Casestudy Functions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CasestudyFunctions','url'=>array('index')),
	array('label'=>'Create CasestudyFunctions','url'=>array('create')),
	array('label'=>'Update CasestudyFunctions','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CasestudyFunctions','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CasestudyFunctions','url'=>array('admin')),
);
?>

<h1>View CasestudyFunctions #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
