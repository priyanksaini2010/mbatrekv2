<?php
$this->breadcrumbs=array(
	'Traits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Traits','url'=>array('index')),
	array('label'=>'Manage Traits','url'=>array('admin')),
);
?>

<h1>Create Traits</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>