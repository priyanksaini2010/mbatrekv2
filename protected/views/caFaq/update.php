<?php
$this->breadcrumbs=array(
	'CA Faqs'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage CA Faq','url'=>array('caFaq/admin')),
	array('label'=>'Add Faq','url'=>array('caFaq/create')),
);

?>

<h1>Update CA Faq <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>