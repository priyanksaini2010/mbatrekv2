<?php
$this->breadcrumbs=array(
	'Student Resumes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentResume','url'=>array('index')),
	array('label'=>'Manage StudentResume','url'=>array('admin')),
);
?>

<h1>Create StudentResume</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>