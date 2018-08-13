<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Details',
);

$this->menu=array(
    array('label'=>'View Sessions Details','url'=>array('instituteBatchSession/view','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$_GET['id'])),
    array('label'=>'Manage Sessions Attendance','url'=>array('instituteBatchSessionStudentAttendance/admin','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['id'],'')),
    
    
);


?>
<h1>View Session Details</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_id',
		'module_id',
		'session_name',
		'session_details',
		'session_date',
	),
)); ?>
