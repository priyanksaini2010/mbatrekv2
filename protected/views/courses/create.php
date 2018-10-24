<?php
$this->breadcrumbs=array(
	'Courses'=>array('courses/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Courses','url'=>array('courses/admin')),
	array('label'=>'Create Courses','url'=>array('courses/create')),
);

?>

<h1>Create Courses</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>