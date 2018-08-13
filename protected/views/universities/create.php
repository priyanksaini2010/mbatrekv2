<?php
$this->breadcrumbs=array(
	'Universities'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'Create Universities','url'=>array('universities/create')),
);
?>

<h1>Create Universities</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>