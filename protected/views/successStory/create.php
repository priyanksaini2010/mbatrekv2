<?php
$this->breadcrumbs=array(
	'Success Stories'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Maange Success Story','url'=>array('successStory/admin')),
	array('label'=>'Create Success Story','url'=>array('successStory/create')),
);

?>
<h1>Create Success Story</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>