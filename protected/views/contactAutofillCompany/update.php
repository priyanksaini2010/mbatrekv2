<?php
$this->breadcrumbs=array(
	'Contact Autofill Companies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactAutofillCompany','url'=>array('index')),
	array('label'=>'Create ContactAutofillCompany','url'=>array('create')),
	array('label'=>'View ContactAutofillCompany','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ContactAutofillCompany','url'=>array('admin')),
);
?>

<h1>Update ContactAutofillCompany <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>