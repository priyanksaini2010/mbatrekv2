<?php
$this->breadcrumbs=array(
	'Blog Comments',
);

$this->menu=array(
	array('label'=>'Create BlogComments','url'=>array('create')),
	array('label'=>'Manage BlogComments','url'=>array('admin')),
);
?>

<h1>Blog Comments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
