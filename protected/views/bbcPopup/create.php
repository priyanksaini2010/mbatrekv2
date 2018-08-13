<?php
$this->breadcrumbs=array(
	'Bbc Popups'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage BbcPopup','url'=>array('admin')),
	array('label'=>'Create BbcPopup','url'=>array('create')),
);
?>

<h1>Create B2C Popup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>