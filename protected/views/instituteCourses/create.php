<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
        $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
        $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
	'Add Course Schedule',
);


$this->menu=array(
	array('label'=>'Manage Course Schedule','url'=>array('instituteCourses/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Add Course Schedule','url'=>array('instituteCourses/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);

?>


<h1>Create Institute Courses</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>