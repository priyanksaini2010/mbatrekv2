<?php
$this->breadcrumbs=array(
	'Ebrouchers Categories'=>array('admin'),
	'Create',
);

$this->menu=array(
        array('label'=>'Manage Ebrouchers Category','url'=>array('ebrouchersCategory/admin')),
	array('label'=>'Create Ebrouchers Category','url'=>array('ebrouchersCategory/create')),
);

?>

<h1>Create Ebrouchers Category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>