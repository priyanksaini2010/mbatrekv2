<?php
$this->breadcrumbs=array(
	'Student To Dos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentToDo','url'=>array('index')),
	array('label'=>'Manage StudentToDo','url'=>array('admin')),
);
?>

<h1>Create StudentToDo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>