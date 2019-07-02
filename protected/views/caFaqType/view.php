<?php
$this->breadcrumbs=array(
	'Ca Faq Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CaFaqType','url'=>array('index')),
	array('label'=>'Create CaFaqType','url'=>array('create')),
	array('label'=>'Update CaFaqType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CaFaqType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CaFaqType','url'=>array('admin')),
);
?>

<h1>View CaFaqType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
