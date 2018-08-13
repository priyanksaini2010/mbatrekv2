<?php
$this->breadcrumbs=array(
	'Institute Batch Notifications',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchNotification','url'=>array('create')),
	array('label'=>'Manage InstituteBatchNotification','url'=>array('admin')),
);
?>

<h1>Institute Batch Notifications</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
