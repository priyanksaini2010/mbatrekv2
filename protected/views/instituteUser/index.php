<?php
$this->breadcrumbs=array(
	'Institute Users',
);

$this->menu=array(
	array('label'=>'Create InstituteUser','url'=>array('create')),
	array('label'=>'Manage InstituteUser','url'=>array('admin')),
);
?>

<h1>Institute Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
