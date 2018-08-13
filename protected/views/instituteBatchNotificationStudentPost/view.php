<?php
$this->breadcrumbs=array(
	'Institute Batch Notification Student Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchNotificationStudentPost','url'=>array('index')),
	array('label'=>'Create InstituteBatchNotificationStudentPost','url'=>array('create')),
	array('label'=>'Update InstituteBatchNotificationStudentPost','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchNotificationStudentPost','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchNotificationStudentPost','url'=>array('admin')),
);
?>

<h1>View InstituteBatchNotificationStudentPost #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_notification_id',
		'student_id',
		'is_shown',
		'mentor',
		'Agreement_with_session_and_mentor',
		'Expectations_met',
		'Learning_from_colleagues',
		'Real_situation_applicability',
		'rating',
	),
)); ?>
