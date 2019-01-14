<?php
$this->breadcrumbs=array(
	'Payu Responses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PayuResponse','url'=>array('index')),
	array('label'=>'Create PayuResponse','url'=>array('create')),
	array('label'=>'Update PayuResponse','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PayuResponse','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PayuResponse','url'=>array('admin')),
);
?>

<h1>View PayuResponse #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_id',
		'payu_response',
		'date_created',
	),
)); ?>
