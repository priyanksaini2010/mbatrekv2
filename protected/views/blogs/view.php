<?php
$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Blogs','url'=>array('index')),
	array('label'=>'Create Blogs','url'=>array('create')),
	array('label'=>'Update Blogs','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Blogs','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Blogs','url'=>array('admin')),
);
?>

<h1>View Blogs #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'blog_category_id',
		'title',
		'content',
		'author',
		'background_image',
		'date_created',
	),
)); ?>
