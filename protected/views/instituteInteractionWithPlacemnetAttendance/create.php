<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);

$this->menu=array(
array('label'=>'Manage Talk To Us','url'=>array('instituteInteractionWithPlacemnet/admin','institute_batch_id'=> $_GET['institute_batch_id'])),
	array('label'=>'Create Talk To Us','url'=>array('instituteInteractionWithPlacemnet/create','institute_batch_id'=> $_GET['institute_batch_id'])),
    array('label'=>'Talk To Us Details','url'=>array('instituteInteractionWithPlacemnet/view','institute_batch_id'=> $_GET['institute_batch_id'],'id'=>$_GET['interaction_id'])),
    array('label'=>'Talk To Us -- Attendance','url'=>array('instituteInteractionWithPlacemnetAttendance/admin','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['interaction_id'])),
    array('label'=>'Talk To Us --Add Attendance','url'=>array('instituteInteractionWithPlacemnetAttendance/create','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['interaction_id'])),
    array('label'=>'Talk To Us -- Plan Of Action','url'=>array('instituteInteractionWithPlacemnetPlanOfAction/admin','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['interaction_id'])),
    array('label'=>'Talk To Us --Add Plan Of Action','url'=>array('instituteInteractionWithPlacemnetPlanOfAction/create','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['interaction_id'])),
);

?>

<h1>Talk To Us --Add Attendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>