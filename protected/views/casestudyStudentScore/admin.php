<?php



 if (isset($_GET['student_id'])) {
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
    } else if($_GET['casestudy_id']) {
            $int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

            $this->breadcrumbs=array(
                    $int->instituteCourse->institute->name=>array('institutes/admin'),
                    $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
                    $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
                    'Case Study Details',
            );
            $this->menu=array(
                    array('label'=>'Manage Case Study','url'=>array('moduleCasestudy/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
                    array('label'=>'Manage Case Study Quiz','url'=>array('casestudyQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
                    array('label'=>'Students Attempted Case Study','url'=>array('casestudyStudentScore/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
            );
    }
?>

<h1>Case Study Scores</h1>

<?php
$attempted = array();
$model2 = CasestudyStudentScore::model()->findAllByAttributes(array("casestudy_id"=>$_GET['casestudy_id']));
foreach ($model2 as $dat) {
    
    $attempted[] = $dat->student_id;
}
$criteria = new CDbCriteria();
if (!empty($attempted)) {
    $criteria->addNotInCondition("id",$attempted);
}
$criteria->addCondition("institute_batch_id =".$_GET['institute_batch_id']);
$studentsNot = Students::model()->findAll($criteria);

$filter = CHtml::listData(ModuleCasestudy::model()->findAllByAttributes(array("institute_batch_id"=>$int->id)), "id", "title");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'casestudy-student-score-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		
                array(
                    "filter" =>$filter,
                    "name" => 'casestudy_id',
                    "value" => '$data->casestudy->title'
                ),
                array(
                    "name" => 'student_id',
                    "value" => '$data->student->name'
                ),
		'student_id',
		'total_score',
		'student_score',
		'completion_date',
		
	),
)); ?>

<h1>Students Not Attempted Case Study</h1>
<ul>
    <?php foreach ($studentsNot as $st){?>
    <li><?php echo $st->name."(ID:".$st->id.")";?></li>
    
    <?php }?>
</ul>