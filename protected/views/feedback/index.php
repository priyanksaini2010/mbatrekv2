<?php
$this->breadcrumbs=array(
	'Feedbacks',
);

$this->menu=array(
	array('label'=>'Create Feedback','url'=>array('create')),
	array('label'=>'Manage Feedback','url'=>array('admin')),
);
?>

<h1>Feedbacks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
