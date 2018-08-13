<?php
$this->breadcrumbs=array(
	'University Course Batches',
);

$this->menu=array(
	array('label'=>'Create UniversityCourseBatch','url'=>array('create')),
	array('label'=>'Manage UniversityCourseBatch','url'=>array('admin')),
);
?>

<h1>University Course Batches</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
