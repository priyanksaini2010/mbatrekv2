<?php
$stud= Students::model()->findByPk($_REQUEST['student_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);

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
    array('label' => 'Add Student Remarks Response', 'url' => array('instituteBatchStudentSessionRemarkResponse/create', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_REQUEST['student_id'],'institute_batch_student_session_remark_id'=>$_GET['institute_batch_student_session_remark_id'])),
    
);

?>

<h1>Manage Remark Responses</h1>

    <?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-student-session-remark-response-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'institute_batch_student_session_remark_id',
		array("name"=>'response_given_by',"value"=>'$data->responseGivenBy->fname'),
		'response',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update}',
		    "updateButtonUrl" => 'Yii::app()->createUrl("instituteBatchStudentSessionRemarkResponse/update", array("institute_batch_id" => $_GET[\'institute_batch_id\'],"student_id"=>$_GET[\'student_id\'],"id"=>$data->id,"institute_batch_student_session_remark_id"=>$_GET[\'institute_batch_student_session_remark_id\']))',
		),
	),
)); ?>
