<?php
$this->breadcrumbs=array(
	'University Course Batches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UniversityCourseBatch','url'=>array('index')),
	array('label'=>'Create UniversityCourseBatch','url'=>array('create')),
	array('label'=>'View UniversityCourseBatch','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage UniversityCourseBatch','url'=>array('admin')),
);
?>

<h1>Update UniversityCourseBatch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>