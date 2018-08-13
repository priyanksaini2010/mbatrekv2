<?php
$this->breadcrumbs=array(
	'Industries'=>array('admin'),
	'Update',
);
$this->menu=array(
	array('label'=>'Manage Industries','url'=>array('industries/admin')),
	array('label'=>'Create Industries','url'=>array('industries/create')),
);
?>

<h1>Update Industry <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>