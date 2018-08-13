<?php
$this->breadcrumbs=array(
	'Talk To Advisories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TalkToAdvisory','url'=>array('index')),
	array('label'=>'Create TalkToAdvisory','url'=>array('create')),
	array('label'=>'Update TalkToAdvisory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TalkToAdvisory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TalkToAdvisory','url'=>array('admin')),
);
?>

<h1>View TalkToAdvisory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'message',
		'institute',
		'area',
	),
)); ?>
