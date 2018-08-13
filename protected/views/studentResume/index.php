<?php
$this->breadcrumbs=array(
	'Student Resumes',
);

$this->menu=array(
	array('label'=>'Create StudentResume','url'=>array('create')),
	array('label'=>'Manage StudentResume','url'=>array('admin')),
);
?>

<h1>Student Resumes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
