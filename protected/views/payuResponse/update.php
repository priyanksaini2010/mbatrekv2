<?php
$this->breadcrumbs=array(
	'Payu Responses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PayuResponse','url'=>array('index')),
	array('label'=>'Create PayuResponse','url'=>array('create')),
	array('label'=>'View PayuResponse','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PayuResponse','url'=>array('admin')),
);
?>

<h1>Update PayuResponse <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>