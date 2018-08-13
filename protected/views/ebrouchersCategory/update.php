<?php
$this->breadcrumbs=array(
	'Ebrouchers Categories'=>array('admin'),
	'Update',
);

$this->menu=array(
        array('label'=>'Manage Ebrouchers Category','url'=>array('ebrouchersCategory/admin')),
	array('label'=>'Create Ebrouchers Category','url'=>array('ebrouchersCategory/create')),
);

?>

<h1>Update EbrouchersCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>