<?php
$this->breadcrumbs=array(
	'Library Books'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LibraryBooks','url'=>array('index')),
	array('label'=>'Create LibraryBooks','url'=>array('create')),
	array('label'=>'Update LibraryBooks','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete LibraryBooks','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LibraryBooks','url'=>array('admin')),
);
?>

<h1>View LibraryBooks #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'library_subject_id',
		'added_by',
		'name',
		'author',
		'file',
	),
)); ?>
