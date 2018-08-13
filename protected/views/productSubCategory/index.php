<?php
$this->breadcrumbs=array(
	'Product Sub Categories',
);

$this->menu=array(
	array('label'=>'Create ProductSubCategory','url'=>array('create')),
	array('label'=>'Manage ProductSubCategory','url'=>array('admin')),
);
?>

<h1>Product Sub Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
