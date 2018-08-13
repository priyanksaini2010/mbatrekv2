<?php
$this->breadcrumbs=array(
	'Casestudy Functions',
);

$this->menu=array(
	array('label'=>'Create CasestudyFunctions','url'=>array('create')),
	array('label'=>'Manage CasestudyFunctions','url'=>array('admin')),
);
?>

<h1>Casestudy Functions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
