<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);
$this->menu=array(
        array('label'=>'Manage Answers','url'=>array('moduleAssigjmentQuizAnswer/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'],'module_assigment_quiz_id'=>$_GET["module_assigment_quiz_id"])),
	array('label'=>'Add Answer','url'=>array('moduleAssigjmentQuizAnswer/create','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'],'module_assigment_quiz_id'=>$_GET["module_assigment_quiz_id"])),
);

?>

<h1>Create Answer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>