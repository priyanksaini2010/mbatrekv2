<?php
$this->breadcrumbs=array(
	'Blog Categories',
);

$this->menu=array(
	array('label'=>'Create BlogCategory','url'=>array('create')),
	array('label'=>'Manage BlogCategory','url'=>array('admin')),
);
?>

<h1>Blog Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
