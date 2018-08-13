<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);
$this->menu=array(
        array('label'=>'Manage  Assignment Question','url'=>array('moduleAssigmentQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'])),
	array('label'=>'Add Assignment Question','url'=>array('moduleAssigmentQuiz/create','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'])),
);

?>

<h1>Add Assignment Question</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>