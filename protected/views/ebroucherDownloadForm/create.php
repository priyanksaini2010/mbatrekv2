<?php
$this->breadcrumbs=array(
	'Ebroucher Download Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbroucherDownloadForm','url'=>array('index')),
	array('label'=>'Manage EbroucherDownloadForm','url'=>array('admin')),
);
?>

<h1>Create EbroucherDownloadForm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>