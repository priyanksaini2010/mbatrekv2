<?php
$this->breadcrumbs=array(
	'Year Of Graduations',
);

$this->menu=array(
	array('label'=>'Create YearOfGraduation','url'=>array('create')),
	array('label'=>'Manage YearOfGraduation','url'=>array('admin')),
);
?>

<h1>Year Of Graduations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
