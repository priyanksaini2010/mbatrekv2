<?php
$this->breadcrumbs=array(
	'Blocked Emails'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BlockedEmail','url'=>array('index')),
	array('label'=>'Create BlockedEmail','url'=>array('create')),
	array('label'=>'Update BlockedEmail','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BlockedEmail','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlockedEmail','url'=>array('admin')),
);
?>

<h1>View BlockedEmail #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
	),
)); ?>
