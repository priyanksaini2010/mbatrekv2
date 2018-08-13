<?php
$this->breadcrumbs=array(
	'Institute Batches',
);

$this->menu=array(
	array('label'=>'Create InstituteBatches','url'=>array('create')),
	array('label'=>'Manage InstituteBatches','url'=>array('admin')),
);
?>

<h1>Institute Batches</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
