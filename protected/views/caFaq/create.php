<?php
$this->breadcrumbs=array(
	'CA Faqs'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage CA Faq','url'=>array('caFaq/admin')),
	array('label'=>'Add CA Faq','url'=>array('caFaq/create')),
);


?>


<h1>Create CA Faq</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>