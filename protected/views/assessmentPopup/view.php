<?php
$this->breadcrumbs=array(
	'Assessment Popups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AssessmentPopup','url'=>array('index')),
	array('label'=>'Create AssessmentPopup','url'=>array('create')),
	array('label'=>'Update AssessmentPopup','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete AssessmentPopup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AssessmentPopup','url'=>array('admin')),
);
?>

<h1>View AssessmentPopup #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'status',
	),
)); ?>
