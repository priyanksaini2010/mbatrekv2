<?php
$this->breadcrumbs=array(
	'Module Student Ratings',
);

$this->menu=array(
	array('label'=>'Create ModuleStudentRating','url'=>array('create')),
	array('label'=>'Manage ModuleStudentRating','url'=>array('admin')),
);
?>

<h1>Module Student Ratings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
