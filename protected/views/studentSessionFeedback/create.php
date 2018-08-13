<?php
$this->breadcrumbs=array(
	'Student Session Feedbacks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentSessionFeedback','url'=>array('index')),
	array('label'=>'Manage StudentSessionFeedback','url'=>array('admin')),
);
?>

<h1>Create StudentSessionFeedback</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>