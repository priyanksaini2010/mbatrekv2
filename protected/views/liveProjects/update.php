<?php
$this->breadcrumbs=array(
	'Live Projects'=>array('admin'),$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Live Projects','url'=>array('admin')),
	
);
?>

<h1>Add Live Projects Download file </h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>