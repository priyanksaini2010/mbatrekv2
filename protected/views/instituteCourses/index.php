<?php
$this->breadcrumbs=array(
	'Institute Courses',
);

$this->menu=array(
	array('label'=>'Create InstituteCourses','url'=>array('create')),
	array('label'=>'Manage InstituteCourses','url'=>array('admin')),
);
?>

<h1>Institute Courses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
