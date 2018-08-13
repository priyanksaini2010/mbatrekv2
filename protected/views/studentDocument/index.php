<?php
$this->breadcrumbs=array(
	'Student Documents',
);

$this->menu=array(
	array('label'=>'Create StudentDocument','url'=>array('create')),
	array('label'=>'Manage StudentDocument','url'=>array('admin')),
);
?>

<h1>Student Documents</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
