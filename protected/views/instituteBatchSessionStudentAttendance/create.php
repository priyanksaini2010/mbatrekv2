<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);

$this->menu=array(
    array('label'=>'View Sessions Details','url'=>array('instituteBatchSession/view','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$_GET['institute_batch_session_id'])),
    array('label'=>'Manage Sessions Attendance','url'=>array('instituteBatchSessionStudentAttendance/admin','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['institute_batch_session_id'])),
    array('label'=>'Add Sessions Attendance','url'=>array('instituteBatchSessionStudentAttendance/create','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['institute_batch_session_id'])),
);


?>
<h1>Add Session Attendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>