<?php
$this->breadcrumbs=array(
	'Student Session Feedbacks',
);

$this->menu=array(
	array('label'=>'Create StudentSessionFeedback','url'=>array('create')),
	array('label'=>'Manage StudentSessionFeedback','url'=>array('admin')),
);
?>

<h1>Student Session Feedbacks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
