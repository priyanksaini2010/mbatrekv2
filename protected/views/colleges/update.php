<?php
$this->breadcrumbs=array(
	'Colleges'=>array('colleges/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Colleges','url'=>array('colleges/admin')),
	array('label'=>'Create Colleges','url'=>array('colleges/create')),
);
?>
<h1>Update College</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>