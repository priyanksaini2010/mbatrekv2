<?php
$this->breadcrumbs=array(
	'Contact Autofill Companies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactAutofillCompany','url'=>array('index')),
	array('label'=>'Create ContactAutofillCompany','url'=>array('create')),
	array('label'=>'Update ContactAutofillCompany','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ContactAutofillCompany','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactAutofillCompany','url'=>array('admin')),
);
?>

<h1>View ContactAutofillCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
