<?php
$this->breadcrumbs=array(
	'Module Assignment Student Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModuleAssignmentStudentScore','url'=>array('index')),
	array('label'=>'Manage ModuleAssignmentStudentScore','url'=>array('admin')),
);
?>

<h1>Create ModuleAssignmentStudentScore</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>