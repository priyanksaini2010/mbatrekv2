<?php
$this->breadcrumbs=array(
	'Users News',
);

$this->menu=array(
	array('label'=>'Create UsersNew','url'=>array('create')),
	array('label'=>'Manage UsersNew','url'=>array('admin')),
);
?>

<h1>Users News</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
