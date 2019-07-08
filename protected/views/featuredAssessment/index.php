<?php
$this->breadcrumbs=array(
	'Featured Assessments',
);

$this->menu=array(
	array('label'=>'Create FeaturedAssessment','url'=>array('create')),
	array('label'=>'Manage FeaturedAssessment','url'=>array('admin')),
);
?>

<h1>Featured Assessments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
