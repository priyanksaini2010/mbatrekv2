<?php
$this->breadcrumbs=array(
	'Handbook Downloads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HandbookDownload','url'=>array('index')),
	array('label'=>'Create HandbookDownload','url'=>array('create')),
	array('label'=>'View HandbookDownload','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage HandbookDownload','url'=>array('admin')),
);
?>

<h1>Update HandbookDownload <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>