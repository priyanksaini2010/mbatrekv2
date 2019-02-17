<?php
$this->breadcrumbs=array(
	'Contact Autofills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactAutofill','url'=>array('index')),
	array('label'=>'Manage ContactAutofill','url'=>array('admin')),
);
?>

<h1>Create ContactAutofill</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>