<?php
$this->breadcrumbs=array(
	'Colleges',
);

$this->menu=array(
	array('label'=>'Create Colleges','url'=>array('create')),
	array('label'=>'Manage Colleges','url'=>array('admin')),
);
?>

<h1>Colleges</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
