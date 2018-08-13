<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
        $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
        $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
	'Manage Students',
);

$this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Add Students','url'=>array('students/create','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Add Students Attendance','url'=>array('instituteStudentAttendance/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);

?>
<h1>Create instituteStudentAttendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>