<?php
$this->breadcrumbs=array(
	'Event Galleries',
);

$this->menu=array(
	array('label'=>'Create EventGallery','url'=>array('create')),
	array('label'=>'Manage EventGallery','url'=>array('admin')),
);
?>

<h1>Event Galleries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
