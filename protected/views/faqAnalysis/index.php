<?php
$this->breadcrumbs=array(
	'Faq Analysises',
);

$this->menu=array(
	array('label'=>'Create FaqAnalysis','url'=>array('create')),
	array('label'=>'Manage FaqAnalysis','url'=>array('admin')),
);
?>

<h1>Faq Analysises</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
