<?php
$this->breadcrumbs=array(
	'Student To Dos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentToDo','url'=>array('index')),
	array('label'=>'Create StudentToDo','url'=>array('create')),
	array('label'=>'View StudentToDo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentToDo','url'=>array('admin')),
);
?>

<h1>Update StudentToDo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>