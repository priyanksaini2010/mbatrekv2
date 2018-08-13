<?php
$this->breadcrumbs=array(
	'Module Sessions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModuleSession','url'=>array('index')),
	array('label'=>'Create ModuleSession','url'=>array('create')),
	array('label'=>'View ModuleSession','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ModuleSession','url'=>array('admin')),
);
?>

<h1>Update ModuleSession <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>