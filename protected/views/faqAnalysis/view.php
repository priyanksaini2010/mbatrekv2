<?php
$this->breadcrumbs=array(
	'Faq Analysises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaqAnalysis','url'=>array('index')),
	array('label'=>'Create FaqAnalysis','url'=>array('create')),
	array('label'=>'Update FaqAnalysis','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete FaqAnalysis','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaqAnalysis','url'=>array('admin')),
);
?>

<h1>View FaqAnalysis #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'helpful',
		'not_helpful',
	),
)); ?>
