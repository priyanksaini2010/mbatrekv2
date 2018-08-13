<?php
$this->breadcrumbs=array(
	'Ebrouchers',
);

$this->menu=array(
	array('label'=>'Create Ebrouchers','url'=>array('create')),
	array('label'=>'Manage Ebrouchers','url'=>array('admin')),
);
?>

<h1>Ebrouchers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
