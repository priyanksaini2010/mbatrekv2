<?php
$this->breadcrumbs=array(
	'Student To Dos',
);

$this->menu=array(
	array('label'=>'Create StudentToDo','url'=>array('create')),
	array('label'=>'Manage StudentToDo','url'=>array('admin')),
);
?>

<h1>Student To Dos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
