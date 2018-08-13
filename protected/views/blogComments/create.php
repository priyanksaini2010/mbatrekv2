<?php
$this->breadcrumbs=array(
	'Blog Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BlogComments','url'=>array('index')),
	array('label'=>'Manage BlogComments','url'=>array('admin')),
);
?>

<h1>Create BlogComments</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>