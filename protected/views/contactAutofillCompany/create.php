<?php
$this->breadcrumbs=array(
	'Contact Autofill Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactAutofillCompany','url'=>array('index')),
	array('label'=>'Manage ContactAutofillCompany','url'=>array('admin')),
);
?>

<h1>Create ContactAutofillCompany</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>