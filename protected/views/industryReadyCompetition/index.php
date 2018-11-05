<?php
$this->breadcrumbs=array(
	'Interview Ready Competitions',
);

$this->menu=array(
	array('label'=>'Create InterviewReadyCompetition','url'=>array('create')),
	array('label'=>'Manage InterviewReadyCompetition','url'=>array('admin')),
);
?>

<h1>Interview Ready Competitions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
