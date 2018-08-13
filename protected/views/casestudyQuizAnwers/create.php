<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Case Study Details"=>array('moduleCasestudy/view','institute_batch_id' => $_GET['institute_batch_id'],'id'=>$_GET['casestudy_id']),
	'Create',
);
$this->menu=array(
        array('label'=>'Manage Answers','url'=>array('casestudyQuizAnwers/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'casestudy_quiz_id'=>$_GET['casestudy_id'])),
	array('label'=>'Add Answers','url'=>array('casestudyQuizAnwers/create','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'casestudy_quiz_id'=>$_GET['casestudy_id'])),
    
);

?>
<h1>Create Answer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>