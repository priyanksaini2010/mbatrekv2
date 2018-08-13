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

<h1>Talk To Us -- Attendance Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-interaction-with-placemnet-attendance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'member_name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' =>"{update}{delete}",
			'updateButtonUrl' =>'$this->grid->controller->createUrl("instituteInteractionWithPlacemnetAttendance/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"interaction_id"=>$_GET[\'interaction_id\'],"id"=>$data->id))',
		),
	),
)); ?>
