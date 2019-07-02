<?php
$this->breadcrumbs=array(
	'Contact Autofills'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactAutofill','url'=>array('index')),
	array('label'=>'Create ContactAutofill','url'=>array('create')),
	array('label'=>'Update ContactAutofill','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ContactAutofill','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactAutofill','url'=>array('admin')),
);
?>

<h1>View ContactAutofill #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
