<?php
$this->breadcrumbs=array(
	'Live Projects',
);

$this->menu=array(
	array('label'=>'Create LiveProjects','url'=>array('create')),
	array('label'=>'Manage LiveProjects','url'=>array('admin')),
);
?>

<h1>Live Projects</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
