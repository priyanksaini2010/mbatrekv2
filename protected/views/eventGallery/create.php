<?php
$this->breadcrumbs=array(
	'Event Galleries'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage EventGallery','url'=>array('eventGallery/admin')),
	array('label'=>'Create EventGallery','url'=>array('eventGallery/create')),
);

?>

<h1>Create EventGallery</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>