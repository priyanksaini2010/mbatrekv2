<?php
$this->breadcrumbs=array(
	'Institute Batch Section Students',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchSectionStudent','url'=>array('create')),
	array('label'=>'Manage InstituteBatchSectionStudent','url'=>array('admin')),
);
?>

<h1>Institute Batch Section Students</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
