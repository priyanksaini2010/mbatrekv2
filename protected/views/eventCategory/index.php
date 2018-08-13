<?php
$this->breadcrumbs=array(
	'Event Categories',
);

$this->menu=array(
	array('label'=>'Create EventCategory','url'=>array('create')),
	array('label'=>'Manage EventCategory','url'=>array('admin')),
);
?>

<h1>Event Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
