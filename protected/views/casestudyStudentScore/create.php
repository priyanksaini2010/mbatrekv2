<?php
$this->breadcrumbs=array(
	'Casestudy Student Scores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CasestudyStudentScore','url'=>array('index')),
	array('label'=>'Manage CasestudyStudentScore','url'=>array('admin')),
);
?>

<h1>Create CasestudyStudentScore</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>