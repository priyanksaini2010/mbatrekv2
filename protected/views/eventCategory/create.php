<?php
$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	'Create',
);


$this->menu=array(
	array('label'=>'Maange Event Category','url'=>array('eventCategory/admin')),
	array('label'=>'Create Event Category','url'=>array('eventCategory/create')),
);
?>

<h1>Create Event Category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>