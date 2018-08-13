<?php
$this->breadcrumbs=array(
	'Industry Project With Faculties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndustryProjectWithFaculty','url'=>array('index')),
	array('label'=>'Create IndustryProjectWithFaculty','url'=>array('create')),
	array('label'=>'View IndustryProjectWithFaculty','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage IndustryProjectWithFaculty','url'=>array('admin')),
);
?>

<h1>Update IndustryProjectWithFaculty <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>