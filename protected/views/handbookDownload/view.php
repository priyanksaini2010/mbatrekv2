<?php
$this->breadcrumbs=array(
	'Handbook Downloads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HandbookDownload','url'=>array('index')),
	array('label'=>'Create HandbookDownload','url'=>array('create')),
	array('label'=>'Update HandbookDownload','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete HandbookDownload','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HandbookDownload','url'=>array('admin')),
);
?>

<h1>View HandbookDownload #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'email_address',
		'institute_name',
		'comapny_name',
	),
)); ?>
