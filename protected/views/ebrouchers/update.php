<?php
$this->breadcrumbs=array(
	'Ebrouchers'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Ebrouchers','url'=>array('ebrouchers/admin')),
        array('label'=>'Create Ebrouchers','url'=>array('ebrouchers/create')),
);
?>
<h1>Update Ebrouchers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>