<?php
$this->breadcrumbs=array(
	'Casestudy Quizs',
);

$this->menu=array(
	array('label'=>'Create CasestudyQuiz','url'=>array('create')),
	array('label'=>'Manage CasestudyQuiz','url'=>array('admin')),
);
?>

<h1>Casestudy Quizs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
