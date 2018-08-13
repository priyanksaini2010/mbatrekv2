<?php
$this->breadcrumbs=array(
	'Event Galleries'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage EventGallery','url'=>array('eventGallery/admin')),
	array('label'=>'Create EventGallery','url'=>array('eventGallery/create')),
);

?>

<h1>Update Event Gallery</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>