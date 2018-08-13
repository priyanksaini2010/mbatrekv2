<?php
$this->breadcrumbs=array(
	'Institute Batch Student Session Remarks',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchStudentSessionRemark','url'=>array('create')),
	array('label'=>'Manage InstituteBatchStudentSessionRemark','url'=>array('admin')),
);
?>

<h1>Institute Batch Student Session Remarks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
