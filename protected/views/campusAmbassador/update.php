<?php
$this->breadcrumbs=array(
	'Campus Ambassadors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CampusAmbassador','url'=>array('index')),
	array('label'=>'Create CampusAmbassador','url'=>array('create')),
	array('label'=>'View CampusAmbassador','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CampusAmbassador','url'=>array('admin')),
);
?>

<h1>Update CampusAmbassador <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>