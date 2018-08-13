<?php
$this->breadcrumbs=array(
	'Module Assignments',
);

$this->menu=array(
	array('label'=>'Create ModuleAssignment','url'=>array('create')),
	array('label'=>'Manage ModuleAssignment','url'=>array('admin')),
);
?>

<h1>Module Assignments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
