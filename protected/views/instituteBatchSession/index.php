<?php
$this->breadcrumbs=array(
	'Institute Batch Sessions',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchSession','url'=>array('create')),
	array('label'=>'Manage InstituteBatchSession','url'=>array('admin')),
);
?>

<h1>Institute Batch Sessions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
