<?php
$this->breadcrumbs=array(
	'Success Stories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SuccessStory','url'=>array('index')),
	array('label'=>'Create SuccessStory','url'=>array('create')),
	array('label'=>'Update SuccessStory','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete SuccessStory','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SuccessStory','url'=>array('admin')),
);
?>

<h1>View SuccessStory #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'sub_type',
		'college_or_company',
		'author',
		'course',
		'video_url',
	),
)); ?>
