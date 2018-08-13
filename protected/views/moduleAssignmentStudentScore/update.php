<?php
$this->breadcrumbs=array(
	'Module Assignment Student Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModuleAssignmentStudentScore','url'=>array('index')),
	array('label'=>'Create ModuleAssignmentStudentScore','url'=>array('create')),
	array('label'=>'View ModuleAssignmentStudentScore','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ModuleAssignmentStudentScore','url'=>array('admin')),
);
?>

<h1>Update ModuleAssignmentStudentScore <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>