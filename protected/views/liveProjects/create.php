<?php
$this->breadcrumbs=array(
	'Live Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LiveProjects','url'=>array('index')),
	array('label'=>'Manage LiveProjects','url'=>array('admin')),
);
?>

<h1>Create LiveProjects</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>