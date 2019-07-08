<?php
$this->breadcrumbs=array(
	'Featured Assessments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FeaturedAssessment','url'=>array('index')),
	array('label'=>'Create FeaturedAssessment','url'=>array('create')),
	array('label'=>'Update FeaturedAssessment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete FeaturedAssessment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FeaturedAssessment','url'=>array('admin')),
);
?>

<h1>View FeaturedAssessment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'assessment_id',
		'point_1',
		'point_2',
		'point_3',
		'point_4',
	),
)); ?>
