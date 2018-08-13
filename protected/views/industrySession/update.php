<?php
$this->breadcrumbs=array(
	'Industry Sessions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndustrySession','url'=>array('index')),
	array('label'=>'Create IndustrySession','url'=>array('create')),
	array('label'=>'View IndustrySession','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage IndustrySession','url'=>array('admin')),
);
?>

<h1>Update IndustrySession <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>