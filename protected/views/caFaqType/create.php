<?php
$this->breadcrumbs=array(
	'Ca Faq Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CaFaqType','url'=>array('index')),
	array('label'=>'Manage CaFaqType','url'=>array('admin')),
);
?>

<h1>Create CaFaqType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>