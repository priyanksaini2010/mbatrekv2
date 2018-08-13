<?php
$this->breadcrumbs=array(
	'Product Categories',
);

$this->menu=array(
	array('label'=>'Create ProductCategory','url'=>array('create')),
	array('label'=>'Manage ProductCategory','url'=>array('admin')),
);
?>

<h1>Product Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
