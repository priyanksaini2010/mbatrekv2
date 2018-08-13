<?php
$this->breadcrumbs=array(
	'Institute Batch Section Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstituteBatchSectionStudent','url'=>array('index')),
	array('label'=>'Manage InstituteBatchSectionStudent','url'=>array('admin')),
);
?>

<h1>Create InstituteBatchSectionStudent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>