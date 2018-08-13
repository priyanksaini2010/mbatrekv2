<?php
$this->breadcrumbs=array(
	'Industry Project With Faculties',
);

$this->menu=array(
	array('label'=>'Create IndustryProjectWithFaculty','url'=>array('create')),
	array('label'=>'Manage IndustryProjectWithFaculty','url'=>array('admin')),
);
?>

<h1>Industry Project With Faculties</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
