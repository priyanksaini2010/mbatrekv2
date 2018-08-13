<?php
$this->breadcrumbs=array(
	'Ebroucher Download Forms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EbroucherDownloadForm','url'=>array('index')),
	array('label'=>'Create EbroucherDownloadForm','url'=>array('create')),
	array('label'=>'Update EbroucherDownloadForm','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EbroucherDownloadForm','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbroucherDownloadForm','url'=>array('admin')),
);
?>

<h1>View EbroucherDownloadForm #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'first_name',
		'last_name',
		'phone_number',
	),
)); ?>
