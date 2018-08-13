<?php
$this->breadcrumbs=array(
	'Institutes'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Institutes','url'=>array('institutes/admin')),
	array('label'=>'Create Institutes','url'=>array('institutes/create')),
);
?>

<h1>Create Institutes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>