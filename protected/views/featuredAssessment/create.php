<?php
$this->breadcrumbs=array(
	'Featured Assessments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FeaturedAssessment','url'=>array('index')),
	array('label'=>'Manage FeaturedAssessment','url'=>array('admin')),
);
?>

<h1>Create FeaturedAssessment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>