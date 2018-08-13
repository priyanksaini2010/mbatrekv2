<?php
$this->breadcrumbs=array(
	'Institutes'=>array('admin'),
	$model->name=>array('admin','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Institutes','url'=>array('institutes/admin')),
	array('label'=>'Create Institutes','url'=>array('institutes/create')),
);
?>

<h1>Update Institutes <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>