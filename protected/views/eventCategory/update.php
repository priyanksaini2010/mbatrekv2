<?php
$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Maange Event Category','url'=>array('eventCategory/admin')),
	array('label'=>'Create Event Category','url'=>array('eventCategory/create')),
);
?>

<h1>Update Event Category</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>