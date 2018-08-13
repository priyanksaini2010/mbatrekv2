<?php
$this->breadcrumbs=array(
	'Student Scores',
);

$this->menu=array(
	array('label'=>'Create StudentScore','url'=>array('create')),
	array('label'=>'Manage StudentScore','url'=>array('admin')),
);
?>

<h1>Student Scores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
