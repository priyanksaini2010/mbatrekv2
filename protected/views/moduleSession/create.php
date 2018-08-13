<?php
$this->breadcrumbs=array(
	'Module Sessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModuleSession','url'=>array('index')),
	array('label'=>'Manage ModuleSession','url'=>array('admin')),
);
?>

<h1>Create ModuleSession</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>