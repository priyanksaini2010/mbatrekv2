<?php
$stud= Students::model()->findByPk($_REQUEST['student_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);
if ($int->institute->id == 0) {
    $this->menu = array(
    array('label' =>  $stud->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$_REQUEST['student_id'])),
//    array('label' => 'Assign Intership', 'url' => array('students/internship', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
//    array('label' => 'Assign Intership', 'url' => array('students/projects', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
    array('label' => 'Manage Strong Areas', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],"type"=>2)),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Add Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/create', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
);
}else {
    $this->menu = array(
    array('label' =>  $stud->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$_REQUEST['student_id'])),
    array('label' => 'Assign Intership', 'url' => array('students/internship', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
    array('label' => 'Assign Intership', 'url' => array('students/projects', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'type'=>1)),
    array('label' => 'Manage Strong Areas', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],"type"=>2)),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
    array('label' => 'Add Student Remarks', 'url' => array('instituteBatchStudentSessionRemark/create', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'])),
);
}


?>


<h1>Update Remark</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>