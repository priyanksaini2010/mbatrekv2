<?php
$this->breadcrumbs=array(
	'Popup Reponses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PopupReponse','url'=>array('index')),
	array('label'=>'Create PopupReponse','url'=>array('create')),
	array('label'=>'View PopupReponse','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PopupReponse','url'=>array('admin')),
);
?>

<h1>Update PopupReponse <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>