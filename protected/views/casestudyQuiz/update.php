<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Update',
);


$this->menu=array(
        array('label'=>'Manage Case Study Questions','url'=>array('casestudyQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
	array('label'=>'Add Question','url'=>array('casestudyQuiz/create','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
        
);

?>
<h1>Update Case study question</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>