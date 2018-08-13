<?php
$this->breadcrumbs=array(
	'Student Area Of Improvements',
);

$this->menu=array(
	array('label'=>'Create StudentAreaOfImprovement','url'=>array('create')),
	array('label'=>'Manage StudentAreaOfImprovement','url'=>array('admin')),
);
?>

<h1>Student Area Of Improvements</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
