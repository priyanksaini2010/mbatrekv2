<?php
if(isset($_GET['type']) && $_GET['type'] != ""){
  $int = InstituteBatches::model()->findByPk($_GET['batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create Session Document',
);  
}else{
    $int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

    $int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
    $student = Students::model()->findByPk($_GET['student_id']);
    $int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

    $this->breadcrumbs=array(
	    $int->instituteCourse->institute->name=>array('institutes/admin'),

    $int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	"Manage Students" => array('students/admin','institute_batch_id' => $_REQUEST['institute_batch_id']),
	$student->name =>  array('students/viewprofile','institute_batch_id' => $_REQUEST['institute_batch_id'],"id"=>$student->id),
	    'Update',
    );

    $this->menu=array(
	    array('label'=>'Add '.$t,'url'=>array('create','institute_batch_id'=>$_GET['institute_batch_id'],'student_id'=>$student->id,'type'=>$_GET['type'])),

    );
}
?>

<h1>Add Session Document</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>