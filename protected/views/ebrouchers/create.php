<?php
$this->breadcrumbs=array(
	'Ebrouchers'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Ebrouchers','url'=>array('ebrouchers/admin')),
        array('label'=>'Create Ebrouchers','url'=>array('ebrouchers/create')),
);
?>

<h1>Create Ebrouchers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>