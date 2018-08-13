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
    array('label'=>'Talk To Us Details','url'=>array('instituteInteractionWithPlacemnet/view','institute_batch_id'=> $_GET['institute_batch_id'],'id'=>$_GET['id'])),
    array('label'=>'Talk To Us -- Attendance','url'=>array('instituteInteractionWithPlacemnetAttendance/admin','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['id'])),
    array('label'=>'Talk To Us -- Add Attendance','url'=>array('instituteInteractionWithPlacemnetAttendance/create','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['id'])),
    array('label'=>'Talk To Us -- Plan Of Action','url'=>array('instituteInteractionWithPlacemnetPlanOfAction/admin','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['id'])),
    array('label'=>'Talk To Us --Add Plan Of Action','url'=>array('instituteInteractionWithPlacemnetPlanOfAction/create','institute_batch_id'=> $_GET['institute_batch_id'],'interaction_id'=>$_GET['id'])),
);

?>


<h1>View Talk to Us </h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'date_time',
		'topic',
		'stream',
		'venue',
		'agenda',
		'type',
		'duration',
		'open_time',
		'close_time',
		'summary',
	),
)); ?>
