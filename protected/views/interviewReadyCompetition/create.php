<?php
$this->breadcrumbs=array(
	'Interview Ready Competitions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InterviewReadyCompetition','url'=>array('index')),
	array('label'=>'Manage InterviewReadyCompetition','url'=>array('admin')),
);
?>

<h1>Create InterviewReadyCompetition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>