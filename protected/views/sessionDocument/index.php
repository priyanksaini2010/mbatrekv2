<?php
$this->breadcrumbs=array(
	'Session Documents',
);

$this->menu=array(
	array('label'=>'Create SessionDocument','url'=>array('create')),
	array('label'=>'Manage SessionDocument','url'=>array('admin')),
);
?>

<h1>Session Documents</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
