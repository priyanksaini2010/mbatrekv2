<?php
$this->breadcrumbs=array(
	'Featured Assessments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FeaturedAssessment','url'=>array('index')),
	array('label'=>'Create FeaturedAssessment','url'=>array('create')),
	array('label'=>'View FeaturedAssessment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage FeaturedAssessment','url'=>array('admin')),
);
?>

<h1>Update FeaturedAssessment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>