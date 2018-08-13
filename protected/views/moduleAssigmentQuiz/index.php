<?php
$this->breadcrumbs=array(
	'Module Assigment Quizs',
);

$this->menu=array(
	array('label'=>'Create ModuleAssigmentQuiz','url'=>array('create')),
	array('label'=>'Manage ModuleAssigmentQuiz','url'=>array('admin')),
);
?>

<h1>Module Assigment Quizs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
