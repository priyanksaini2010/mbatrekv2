<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteInteractionWithPlacemnet','url'=>array('index')),
	array('label'=>'Create InstituteInteractionWithPlacemnet','url'=>array('create')),
	array('label'=>'View InstituteInteractionWithPlacemnet','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteInteractionWithPlacemnet','url'=>array('admin')),
);
?>

<h1>Update InstituteInteractionWithPlacemnet <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>