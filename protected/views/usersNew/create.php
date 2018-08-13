<?php
$this->breadcrumbs=array(
	'Users News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersNew','url'=>array('index')),
	array('label'=>'Manage UsersNew','url'=>array('admin')),
);
?>

<h1>Create UsersNew</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>