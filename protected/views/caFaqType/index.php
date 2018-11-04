<?php
$this->breadcrumbs=array(
	'Ca Faq Types',
);

$this->menu=array(
	array('label'=>'Create CaFaqType','url'=>array('create')),
	array('label'=>'Manage CaFaqType','url'=>array('admin')),
);
?>

<h1>Ca Faq Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
