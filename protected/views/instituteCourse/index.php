<?php
$this->breadcrumbs=array(
	'Institute Courses',
);

$this->menu=array(
	array('label'=>'Create InstituteCourse','url'=>array('create')),
	array('label'=>'Manage InstituteCourse','url'=>array('admin')),
);
?>

<h1>Institute Courses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
