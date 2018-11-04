<?php
$this->breadcrumbs=array(
	'Videos'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Videos','url'=>array('videos/admin')),
	array('label'=>'Create Videos','url'=>array('videos/create')),
);

?>

<h1>Create Videos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>