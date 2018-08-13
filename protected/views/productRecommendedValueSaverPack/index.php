<?php
$this->breadcrumbs=array(
	'Product Recommended Value Saver Packs',
);

$this->menu=array(
	array('label'=>'Create ProductRecommendedValueSaverPack','url'=>array('create')),
	array('label'=>'Manage ProductRecommendedValueSaverPack','url'=>array('admin')),
);
?>

<h1>Product Recommended Value Saver Packs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
