<?php
$this->breadcrumbs=array(
	'Blog Comments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BlogComments','url'=>array('index')),
	array('label'=>'Create BlogComments','url'=>array('create')),
	array('label'=>'View BlogComments','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage BlogComments','url'=>array('admin')),
);
?>

<h1>Update BlogComments <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>