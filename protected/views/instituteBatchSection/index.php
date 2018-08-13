<?php
$this->breadcrumbs=array(
	'Institute Batch Sections',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchSection','url'=>array('create')),
	array('label'=>'Manage InstituteBatchSection','url'=>array('admin')),
);
?>

<h1>Institute Batch Sections</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
