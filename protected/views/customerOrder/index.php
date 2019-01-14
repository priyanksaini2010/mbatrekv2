<?php
$this->breadcrumbs=array(
	'Customer Orders',
);

$this->menu=array(
	array('label'=>'Create CustomerOrder','url'=>array('create')),
	array('label'=>'Manage CustomerOrder','url'=>array('admin')),
);
?>

<h1>Customer Orders</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
