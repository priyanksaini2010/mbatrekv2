<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Student Posts',
);

$this->menu=array(
	array('label'=>'Create InstituteBatchNotificationStudentPost','url'=>array('create')),
	array('label'=>'Manage InstituteBatchNotificationStudentPost','url'=>array('admin')),
);
?>

<h1>Institute Batch Notification Student Posts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
