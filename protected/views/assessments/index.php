<?php
$this->breadcrumbs=array(
	'Assessments',
);

$this->menu=array(
	array('label'=>'Create Assessments','url'=>array('create')),
	array('label'=>'Manage Assessments','url'=>array('admin')),
);
?>

<h1>Assessments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
