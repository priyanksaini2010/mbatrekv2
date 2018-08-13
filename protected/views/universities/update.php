<?php
$this->breadcrumbs=array(
	'Universities'=>array('admin'),
	
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'Create Universities','url'=>array('universities/create')),
);
?>

<h1>Update Universities <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>