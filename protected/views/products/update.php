<?php
$this->breadcrumbs=array(
	'Products'=>array('admin'),
	
	'Update Product',
);

$this->menu=array(
	
	array('label'=>'Manage Products','url'=>array('admin')),
);
?>

<h1>Update Products <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>