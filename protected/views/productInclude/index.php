<?php
$this->breadcrumbs=array(
	'Product Includes',
);

$this->menu=array(
	array('label'=>'Create ProductInclude','url'=>array('create')),
	array('label'=>'Manage ProductInclude','url'=>array('admin')),
);
?>

<h1>Product Includes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
