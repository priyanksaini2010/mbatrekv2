<?php
$this->breadcrumbs=array(
	'Industry Options',
);

$this->menu=array(
	array('label'=>'Create IndustryOption','url'=>array('create')),
	array('label'=>'Manage IndustryOption','url'=>array('admin')),
);
?>

<h1>Industry Options</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
