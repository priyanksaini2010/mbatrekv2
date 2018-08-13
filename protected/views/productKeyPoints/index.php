<?php
$this->breadcrumbs=array(
	'Product Key Points',
);

$this->menu=array(
	array('label'=>'Create ProductKeyPoints','url'=>array('create')),
	array('label'=>'Manage ProductKeyPoints','url'=>array('admin')),
);
?>

<h1>Product Key Points</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
