<?php
$this->breadcrumbs=array(
	'Product Sub Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductSubCategory','url'=>array('index')),
	array('label'=>'Manage ProductSubCategory','url'=>array('admin')),
);
?>

<h1>Create ProductSubCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>