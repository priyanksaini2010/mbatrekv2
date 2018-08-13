<?php
$this->breadcrumbs=array(
	'Industry Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndustryUser','url'=>array('index')),
	array('label'=>'Create IndustryUser','url'=>array('create')),
	array('label'=>'View IndustryUser','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage IndustryUser','url'=>array('admin')),
);
?>

<h1>Update IndustryUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>