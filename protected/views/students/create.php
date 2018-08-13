<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);

$this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Add Students','url'=>array('students/create','institute_batch_id'=>$_GET['institute_batch_id'])),
//	array('label'=>'Add Students Attendance','url'=>array('instituteStudentAttendance/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);


?>
<h1>Add Students</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'modelUser'=>$modelUser)); ?>