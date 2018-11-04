<?php
$this->breadcrumbs=array(
	'Ca Faq Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CaFaqType','url'=>array('index')),
	array('label'=>'Create CaFaqType','url'=>array('create')),
	array('label'=>'View CaFaqType','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CaFaqType','url'=>array('admin')),
);
?>

<h1>Update CaFaqType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>