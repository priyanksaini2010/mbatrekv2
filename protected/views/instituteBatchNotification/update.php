<?php
$this->breadcrumbs=array(
	'Institute Batch Notifications'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotification','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotification','url'=>array('create')),
	array('label'=>'View InstituteBatchNotification','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage InstituteBatchNotification','url'=>array('admin')),
);
?>

<h1>Update InstituteBatchNotification <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>