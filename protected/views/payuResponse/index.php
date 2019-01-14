<?php
$this->breadcrumbs=array(
	'Payu Responses',
);

$this->menu=array(
	array('label'=>'Create PayuResponse','url'=>array('create')),
	array('label'=>'Manage PayuResponse','url'=>array('admin')),
);
?>

<h1>Payu Responses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
