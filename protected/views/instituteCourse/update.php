<?php
$this->breadcrumbs=array(
	'Institute Courses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteCourse','url'=>array('index')),
	array('label'=>'Create InstituteCourse','url'=>array('create')),
	array('label'=>'View InstituteCourse','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteCourse','url'=>array('admin')),
);
?>

<h1>Update InstituteCourse <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>