<?php
$this->breadcrumbs=array(
	'Payu Responses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PayuResponse','url'=>array('index')),
	array('label'=>'Manage PayuResponse','url'=>array('admin')),
);
?>

<h1>Create PayuResponse</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>