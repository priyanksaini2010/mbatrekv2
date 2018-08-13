<?php
$this->breadcrumbs=array(
	'Industry Sessions',
);

$this->menu=array(
	array('label'=>'Create IndustrySession','url'=>array('create')),
	array('label'=>'Manage IndustrySession','url'=>array('admin')),
);
?>

<h1>Industry Sessions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
