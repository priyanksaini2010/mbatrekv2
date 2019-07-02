<?php
$this->breadcrumbs=array(
	'Colleges For Competitions'=>array('collegesCompetition/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Colleges For Competitions','url'=>array('collegesCompetition/admin')),
	array('label'=>'Create Colleges For Competitions','url'=>array('collegesCompetition/create')),
);
?>

<h1>Create College For Competitions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>