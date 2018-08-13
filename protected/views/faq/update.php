<?php
$this->breadcrumbs=array(
	'Faqs'=>array('amin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Faq','url'=>array('faq/admin')),
	array('label'=>'Add Faq','url'=>array('faq/create')),
);

?>

<h1>Update Faq <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>