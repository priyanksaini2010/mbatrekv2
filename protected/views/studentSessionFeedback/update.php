<?php
$this->breadcrumbs=array(
	'Student Session Feedbacks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentSessionFeedback','url'=>array('index')),
	array('label'=>'Create StudentSessionFeedback','url'=>array('create')),
	array('label'=>'View StudentSessionFeedback','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentSessionFeedback','url'=>array('admin')),
);
?>

<h1>Update StudentSessionFeedback <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>