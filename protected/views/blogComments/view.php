<?php
$this->breadcrumbs=array(
	'Blog Comments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BlogComments','url'=>array('index')),
	array('label'=>'Create BlogComments','url'=>array('create')),
	array('label'=>'Update BlogComments','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BlogComments','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlogComments','url'=>array('admin')),
);
?>

<h1>View BlogComments #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'blog_id',
		'name',
		'email',
		'comment',
		'is_approved',
		'reply_to',
		'date_created',
	),
)); ?>
