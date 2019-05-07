<?php
$this->breadcrumbs=array(
	'Founding Teams',
);

$this->menu=array(
	array('label'=>'Create FoundingTeam','url'=>array('create')),
	array('label'=>'Manage FoundingTeam','url'=>array('admin')),
);
?>

<h1>Founding Teams</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
