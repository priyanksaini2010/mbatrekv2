<?php
$this->breadcrumbs=array(
	'Ebrouchers Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List EbrouchersCategory','url'=>array('index')),
	array('label'=>'Create EbrouchersCategory','url'=>array('create')),
	array('label'=>'Update EbrouchersCategory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EbrouchersCategory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbrouchersCategory','url'=>array('admin')),
);
?>

<h1>View EbrouchersCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
