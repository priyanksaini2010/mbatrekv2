<?php
$this->breadcrumbs=array(
	'Popup Reponses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PopupReponse','url'=>array('index')),
	array('label'=>'Create PopupReponse','url'=>array('create')),
	array('label'=>'Update PopupReponse','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PopupReponse','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PopupReponse','url'=>array('admin')),
);
?>

<h1>View PopupReponse #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'popup_id',
		'name',
		'email',
		'date_created',
	),
)); ?>
