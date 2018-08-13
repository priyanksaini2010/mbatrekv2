<?php
$this->breadcrumbs=array(
	'B2C Popups'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage BbcPopup','url'=>array('admin')),
);
?>

<h1>Update B2C Popup</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>