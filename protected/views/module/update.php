<?php
$this->breadcrumbs=array(
	'Modules'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Module','url'=>array('module/admin')),
);
?>

<h1>Update Module <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>