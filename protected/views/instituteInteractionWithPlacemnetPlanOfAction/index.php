<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnet Plan Of Actions',
);

$this->menu=array(
	array('label'=>'Create InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('create')),
	array('label'=>'Manage InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('admin')),
);
?>

<h1>Institute Interaction With Placemnet Plan Of Actions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
