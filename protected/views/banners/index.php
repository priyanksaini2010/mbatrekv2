<?php
$this->breadcrumbs=array(
	'Banners',
);

$this->menu=array(
	array('label'=>'Create Banners','url'=>array('create')),
	array('label'=>'Manage Banners','url'=>array('admin')),
);
?>

<h1>Banners</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
