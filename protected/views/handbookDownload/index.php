<?php
$this->breadcrumbs=array(
	'Handbook Downloads',
);

$this->menu=array(
	array('label'=>'Create HandbookDownload','url'=>array('create')),
	array('label'=>'Manage HandbookDownload','url'=>array('admin')),
);
?>

<h1>Handbook Downloads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
