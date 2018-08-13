<?php
$this->breadcrumbs=array(
	'Industry Project With Faculties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndustryProjectWithFaculty','url'=>array('index')),
	array('label'=>'Manage IndustryProjectWithFaculty','url'=>array('admin')),
);
?>

<h1>Create IndustryProjectWithFaculty</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>