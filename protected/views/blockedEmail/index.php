<?php
$this->breadcrumbs=array(
	'Blocked Emails',
);

$this->menu=array(
	array('label'=>'Create BlockedEmail','url'=>array('create')),
	array('label'=>'Manage BlockedEmail','url'=>array('admin')),
);
?>

<h1>Blocked Emails</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
