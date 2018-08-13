<?php
$this->breadcrumbs=array(
	'Casestudy Student Scores',
);

$this->menu=array(
	array('label'=>'Create CasestudyStudentScore','url'=>array('create')),
	array('label'=>'Manage CasestudyStudentScore','url'=>array('admin')),
);
?>

<h1>Casestudy Student Scores</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
