<?php
$this->breadcrumbs=array(
	'Institute Batch Student Session Remarks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchStudentSessionRemark','url'=>array('index')),
	array('label'=>'Create InstituteBatchStudentSessionRemark','url'=>array('create')),
	array('label'=>'Update InstituteBatchStudentSessionRemark','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchStudentSessionRemark','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchStudentSessionRemark','url'=>array('admin')),
);
?>

<h1>View InstituteBatchStudentSessionRemark #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_session_id',
		'student_Id',
		'current_performance',
		'past_performance',
		'response',
	),
)); ?>
