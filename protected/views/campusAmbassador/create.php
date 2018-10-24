<?php
$this->breadcrumbs=array(
	'Campus Ambassadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CampusAmbassador','url'=>array('index')),
	array('label'=>'Manage CampusAmbassador','url'=>array('admin')),
);
?>

<h1>Create CampusAmbassador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>