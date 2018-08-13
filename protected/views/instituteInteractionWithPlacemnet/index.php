<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnets',
);

$this->menu=array(
	array('label'=>'Create InstituteInteractionWithPlacemnet','url'=>array('create')),
	array('label'=>'Manage InstituteInteractionWithPlacemnet','url'=>array('admin')),
);
?>

<h1>Institute Interaction With Placemnets</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
