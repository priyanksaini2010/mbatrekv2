<?php
$this->breadcrumbs=array(
	'Faqs'=>array('amin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Faq','url'=>array('faq/admin')),
	array('label'=>'Add Faq','url'=>array('faq/create')),
);


?>


<h1>Create Faq</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>