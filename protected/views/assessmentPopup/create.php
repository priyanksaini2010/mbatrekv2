<?php
$this->breadcrumbs=array(
	'Assessment Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AssessmentPopup','url'=>array('index')),
	array('label'=>'Manage AssessmentPopup','url'=>array('admin')),
);
?>

<h1>Create AssessmentPopup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>