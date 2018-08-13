<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$student = Students::model()->findByPk($_GET['student_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);
$this->menu = array(
    array('label' =>  $student->name.' Profile', 'url' => array('students/viewprofile','institute_batch_id' => $int->id,'id'=>$student->id)),
    array('label' => 'Manage Areas of improvement', 'url' => array('studentAreaOfImprovement/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Case Study Score', 'url' => array('casestudyStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Assignment Scores', 'url' => array('moduleAssignmentStudentScore/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$_GET['student_id'])),
    array('label' => 'Assign/Update Section', 'url' => array('instituteBatchSectionStudent/update', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$student->id)),
    array('label' => 'Student Rating', 'url' => array('moduleStudentRating/admin', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$student->id)),
//    array('label' => 'Add Rating', 'url' => array('moduleStudentRating/create', 'institute_batch_id' => $_GET['institute_batch_id'],'student_id'=>$student->id)),
);
?>


<h1>Student Ratings</h1>

<?php
$filter = CHtml::listData(Module::model()->findAll(),'id','name');$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-student-rating-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'filter' => $filter,
                    'name'=>'module_id',
                    'value' => '$data->module->name'
                ),
		'rating',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "",
                    'updateButtonUrl' =>'$this->grid->controller->createUrl("moduleStudentRating/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id,"student_id"=>$data->student_id))',
                    
		),
	),
)); ?>
