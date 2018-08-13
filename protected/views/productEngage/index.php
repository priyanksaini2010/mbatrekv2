<?php
$this->breadcrumbs=array(
	'Product Engages',
);

$this->menu=array(
	array('label'=>'Create ProductEngage','url'=>array('create')),
	array('label'=>'Manage ProductEngage','url'=>array('admin')),
);
?>

<h1>Product Engages</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
