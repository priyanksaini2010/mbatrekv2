<?php
$this->breadcrumbs=array(
	'Ebroucher Download Forms',
);

$this->menu=array(
	array('label'=>'Create EbroucherDownloadForm','url'=>array('create')),
	array('label'=>'Manage EbroucherDownloadForm','url'=>array('admin')),
);
?>

<h1>Ebroucher Download Forms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
