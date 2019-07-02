<?php
$this->breadcrumbs=array(
	'Popups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Popup','url'=>array('index')),
	array('label'=>'Create Popup','url'=>array('create')),
	array('label'=>'Update Popup','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Popup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Popup','url'=>array('admin')),
);
?>

<h1>View Popup #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'for_user',
		'header_text',
		'sub_heading_text',
		'button_text',
		'cancellation_text',
	),
)); ?>
