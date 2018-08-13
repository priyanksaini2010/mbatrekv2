<?php
$this->breadcrumbs=array(
	'Industry Users',
);

$this->menu=array(
	array('label'=>'Create IndustryUser','url'=>array('create')),
	array('label'=>'Manage IndustryUser','url'=>array('admin')),
);
?>

<h1>Industry Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
