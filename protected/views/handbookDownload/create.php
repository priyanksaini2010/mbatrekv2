<?php
$this->breadcrumbs=array(
	'Handbook Downloads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HandbookDownload','url'=>array('index')),
	array('label'=>'Manage HandbookDownload','url'=>array('admin')),
);
?>

<h1>Create HandbookDownload</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>