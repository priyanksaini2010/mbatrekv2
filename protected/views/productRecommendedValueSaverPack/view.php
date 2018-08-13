<?php
$this->breadcrumbs=array(
	'Product Recommended Value Saver Packs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ProductRecommendedValueSaverPack','url'=>array('index')),
	array('label'=>'Create ProductRecommendedValueSaverPack','url'=>array('create')),
	array('label'=>'Update ProductRecommendedValueSaverPack','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ProductRecommendedValueSaverPack','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductRecommendedValueSaverPack','url'=>array('admin')),
);
?>

<h1>View ProductRecommendedValueSaverPack #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'title',
		'short_description',
		'icon',
	),
)); ?>
