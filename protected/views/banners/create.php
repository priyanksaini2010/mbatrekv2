<?php
$this->breadcrumbs=array(
	'Coupon Codes'=>array('banners/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Banners','url'=>array('banners/admin')),
	array('label'=>'Create Banners','url'=>array('banners/create')),
);
?>
<h1>Create Banners</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>