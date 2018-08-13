<?php
$this->breadcrumbs=array(
	'Module Sessions',
);

$this->menu=array(
	array('label'=>'Create ModuleSession','url'=>array('create')),
	array('label'=>'Manage ModuleSession','url'=>array('admin')),
);
?>

<h1>Module Sessions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
