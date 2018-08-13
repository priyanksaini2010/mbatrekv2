<?php
$this->breadcrumbs=array(
	'Student Resumes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentResume','url'=>array('index')),
	array('label'=>'Create StudentResume','url'=>array('create')),
	array('label'=>'View StudentResume','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentResume','url'=>array('admin')),
);
?>

<h1>Update StudentResume <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>