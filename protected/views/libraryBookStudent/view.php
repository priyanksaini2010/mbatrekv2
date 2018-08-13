<?php
$this->breadcrumbs=array(
	'Library Book Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LibraryBookStudent','url'=>array('index')),
	array('label'=>'Create LibraryBookStudent','url'=>array('create')),
	array('label'=>'Update LibraryBookStudent','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete LibraryBookStudent','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LibraryBookStudent','url'=>array('admin')),
);
?>

<h1>View LibraryBookStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'book_id',
		'student_id',
	),
)); ?>
