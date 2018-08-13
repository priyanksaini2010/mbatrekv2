<?php
$this->breadcrumbs=array(
	'Ebrouchers Categories',
);

$this->menu=array(
	array('label'=>'Create EbrouchersCategory','url'=>array('create')),
	array('label'=>'Manage EbrouchersCategory','url'=>array('admin')),
);
?>

<h1>Ebrouchers Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
