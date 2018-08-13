<?php
$this->breadcrumbs=array(
	'Module Webinars',
);

$this->menu=array(
	array('label'=>'Create ModuleWebinar','url'=>array('create')),
	array('label'=>'Manage ModuleWebinar','url'=>array('admin')),
);
?>

<h1>Module Webinars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
