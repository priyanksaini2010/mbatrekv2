<?php
$this->breadcrumbs=array(
	'Institute Batch Student Session Remark Responses',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchStudentSessionRemarkResponse','url'=>array('create')),
	array('label'=>'Manage InstituteBatchStudentSessionRemarkResponse','url'=>array('admin')),
);
?>

<h1>Institute Batch Student Session Remark Responses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
