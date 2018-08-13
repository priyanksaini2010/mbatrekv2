<?php
$this->breadcrumbs=array(
	'Users News'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersNew','url'=>array('index')),
	array('label'=>'Create UsersNew','url'=>array('create')),
	array('label'=>'View UsersNew','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage UsersNew','url'=>array('admin')),
);
?>

<h1>Update UsersNew <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>