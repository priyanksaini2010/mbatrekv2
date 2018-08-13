<?php
$this->breadcrumbs=array(
	'Student Scores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentScore','url'=>array('index')),
	array('label'=>'Create StudentScore','url'=>array('create')),
	array('label'=>'View StudentScore','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentScore','url'=>array('admin')),
);
?>

<h1>Update StudentScore <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>