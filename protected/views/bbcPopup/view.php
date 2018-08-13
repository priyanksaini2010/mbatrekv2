<?php
$this->breadcrumbs=array(
	'Bbc Popups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BbcPopup','url'=>array('index')),
	array('label'=>'Create BbcPopup','url'=>array('create')),
	array('label'=>'Update BbcPopup','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BbcPopup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BbcPopup','url'=>array('admin')),
);
?>

<h1>View BbcPopup #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
	),
)); ?>
