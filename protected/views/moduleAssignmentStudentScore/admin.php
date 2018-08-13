<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$student = Students::model()->findByPk($_GET['student_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Update',
);
$this->menu = array(
    array('label' =>  $student->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$student->id)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$student->id)),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$student->id)),
);
?>

<h1>Assignments Scores</h1>


<?php 
$status = array(1=>'Started',2=>'Completed',3=>'Closed');
$filter = CHtml::listData(ModuleAssignment::model()->findAllByAttributes(array("institute_batch_id"=>$int->id)), "id", "title");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-assignment-student-score-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'module_assignment_id',
                array(
                    "filter" =>$filter,
                    "name" => 'module_assignment_id',
                    "value" => '$data->moduleAssignment->title'
                ),
//		'student_id',
		'total_score',
		'student_score',
		
            array(
                'name'=>'status',
                'filter'=>$status,
                'value'=>array($this,'getStatus')
                ),
		/*
		'close_date',
		*/
	),
)); ?>
