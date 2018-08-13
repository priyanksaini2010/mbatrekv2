<?php
$this->breadcrumbs=array(
	'Module Assignment Student Scores',
);

$this->menu=array(
	array('label'=>'Create ModuleAssignmentStudentScore','url'=>array('create')),
	array('label'=>'Manage ModuleAssignmentStudentScore','url'=>array('admin')),
);
?>

<h1>Module Assignment Student Scores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
