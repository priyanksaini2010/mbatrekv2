<?php
$this->breadcrumbs=array(
	'Handbook Downloads'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>' Handbook Downloads','url'=>array('handbookDownload/admin')),
);

?>

<h1>Handbook Downloads</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'handbook-download-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'first_name',
		'last_name',
		'email_address',
		'institute_name',
		'comapny_name',
	),
)); ?>
