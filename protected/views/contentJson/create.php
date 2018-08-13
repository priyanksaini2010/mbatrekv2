<?php
$this->breadcrumbs=array(
	'Content Jsons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContentJson','url'=>array('index')),
	array('label'=>'Manage ContentJson','url'=>array('admin')),
);
?>

<h1>Create ContentJson</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>