<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $_GET['institute_batch_id']),
    "Manage Assignments Quiz" => array('moduleAssigmentQuiz/admin','institute_batch_id' => $_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id']),
	'Details',
);
$this->menu=array(
	array('label'=>'Manage  Assignment Question','url'=>array('admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'])),
	array('label'=>'Manage  Answers','url'=>array('moduleAssigjmentQuizAnswer/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'],'module_assigment_quiz_id'=>$model->id)),
);

?>

<h1>Question Detail</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'question',
		'question_score',
	),
)); ?>
