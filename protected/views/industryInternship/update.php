<?php
$this->breadcrumbs=array(
	'Industry Internships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndustryInternship','url'=>array('index')),
	array('label'=>'Create IndustryInternship','url'=>array('create')),
	array('label'=>'View IndustryInternship','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage IndustryInternship','url'=>array('admin')),
);
?>

<h1>Update IndustryInternship <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>