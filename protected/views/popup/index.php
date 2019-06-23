<?php
$this->breadcrumbs=array(
	'Popups',
);

$this->menu=array(
	array('label'=>'Create Popup','url'=>array('create')),
	array('label'=>'Manage Popup','url'=>array('admin')),
);
?>

<h1>Popups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
