<?php
$this->breadcrumbs=array(
	'Industries',
);

$this->menu=array(
	array('label'=>'Create Industries','url'=>array('create')),
	array('label'=>'Manage Industries','url'=>array('admin')),
);
?>

<h1>Industries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
