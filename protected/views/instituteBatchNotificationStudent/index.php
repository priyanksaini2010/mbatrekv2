<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Students',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchNotificationStudent','url'=>array('create')),
	array('label'=>'Manage InstituteBatchNotificationStudent','url'=>array('admin')),
);
?>

<h1>Institute Batch Notification Students</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
