<?php
$this->breadcrumbs=array(
	'Articles',
);

$this->menu=array(
	array('label'=>'Create Articles','url'=>array('create')),
	array('label'=>'Manage Articles','url'=>array('admin')),
);
?>

<h1>Articles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
