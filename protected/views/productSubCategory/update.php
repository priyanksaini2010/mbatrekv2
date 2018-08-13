<?php
$this->breadcrumbs=array(
	'Product Sub Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductSubCategory','url'=>array('index')),
	array('label'=>'Create ProductSubCategory','url'=>array('create')),
	array('label'=>'View ProductSubCategory','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage ProductSubCategory','url'=>array('admin')),
);
?>

<h1>Update ProductSubCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>