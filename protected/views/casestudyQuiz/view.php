<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Case Study Details"=>array('moduleCasestudy/view','institute_batch_id' => $_GET['institute_batch_id'],'id'=>$_GET['casestudy_id']),
	'Details',
);
$this->menu=array(
	array('label'=>'Manage Case Study Questions','url'=>array('admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
	array('label'=>'Update Question','url'=>array('update','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'id'=>$model->id)),
        array('label'=>'Manage Answers','url'=>array('casestudyQuizAnwers/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'casestudy_quiz_id'=>$model->id)),
);

?>

<h1>View Question Details</h1>
<p>
    Question : <?php echo $model->question;?>
</p>
<p>
    Score : <?php echo $model->question_score;?>
</p>