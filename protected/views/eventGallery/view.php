<?php
$this->breadcrumbs=array(
	'Event Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventGallery','url'=>array('index')),
	array('label'=>'Create EventGallery','url'=>array('create')),
	array('label'=>'Update EventGallery','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EventGallery','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventGallery','url'=>array('admin')),
);
?>

<h1>View EventGallery #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_category_id',
		'image',
	),
)); ?>
