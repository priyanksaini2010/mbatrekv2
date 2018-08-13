<?php
$this->breadcrumbs=array(
	'Industry Internships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndustryInternship','url'=>array('index')),
	array('label'=>'Manage IndustryInternship','url'=>array('admin')),
);
?>

<h1>Create IndustryInternship</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>