<?php
$this->breadcrumbs=array(
	'Contact Autofills'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactAutofill','url'=>array('index')),
	array('label'=>'Create ContactAutofill','url'=>array('create')),
	array('label'=>'View ContactAutofill','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ContactAutofill','url'=>array('admin')),
);
?>

<h1>Update ContactAutofill <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>