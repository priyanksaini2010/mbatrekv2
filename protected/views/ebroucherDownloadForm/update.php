<?php
$this->breadcrumbs=array(
	'Ebroucher Download Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbroucherDownloadForm','url'=>array('index')),
	array('label'=>'Create EbroucherDownloadForm','url'=>array('create')),
	array('label'=>'View EbroucherDownloadForm','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EbroucherDownloadForm','url'=>array('admin')),
);
?>

<h1>Update EbroucherDownloadForm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>