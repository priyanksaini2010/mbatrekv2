<?php
$this->breadcrumbs=array(
	'Industry Sessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndustrySession','url'=>array('index')),
	array('label'=>'Manage IndustrySession','url'=>array('admin')),
);
?>

<h1>Create IndustrySession</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>