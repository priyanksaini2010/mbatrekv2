<?php
$this->breadcrumbs=array(
	'Institute Batch Student Session Remark Responses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchStudentSessionRemarkResponse','url'=>array('index')),
	array('label'=>'Create InstituteBatchStudentSessionRemarkResponse','url'=>array('create')),
	array('label'=>'Update InstituteBatchStudentSessionRemarkResponse','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchStudentSessionRemarkResponse','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchStudentSessionRemarkResponse','url'=>array('admin')),
);
?>

<h1>View InstituteBatchStudentSessionRemarkResponse #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_student_session_remark_id',
		'response_given_by',
		'response',
	),
)); ?>
