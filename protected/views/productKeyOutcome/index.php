<?php
$this->breadcrumbs=array(
	'Product Key Outcomes',
);

$this->menu=array(
	array('label'=>'Create ProductKeyOutcome','url'=>array('create')),
	array('label'=>'Manage ProductKeyOutcome','url'=>array('admin')),
);
?>

<h1>Product Key Outcomes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
