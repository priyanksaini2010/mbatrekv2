<?php
$this->breadcrumbs=array(
	'Products'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Products','url'=>array('admin')),
);
?>

<h1>Step 1 : Create Product Details</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>