<?php
$this->breadcrumbs=array(
	'Interview Ready Competitions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InterviewReadyCompetition','url'=>array('index')),
	array('label'=>'Create InterviewReadyCompetition','url'=>array('create')),
	array('label'=>'View InterviewReadyCompetition','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InterviewReadyCompetition','url'=>array('admin')),
);
?>

<h1>Update InterviewReadyCompetition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>