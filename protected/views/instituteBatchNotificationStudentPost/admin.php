<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Output',
);


$this->menu=array(
	array('label'=>'Manage Batch','url'=>array('instituteBatches/view','institute_id'=>$int->institute_id,'id'=>$int->id)),
	array('label'=>'Post Session Output','url'=>array('instituteBatchNotificationStudentPost/admin','institute_batch_id'=> $_GET['institute_batch_id'])),
    
);


?>

<h1>Post Session Output</h1>

<?php 
$filter = CHtml::listData(Module::model()->findAll(),'id','name');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-notification-student-post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'filter' => $filter,
                    'header'=>'Module',
                    'value' => '$data->instituteBatchNotification->instituteBatchSession->module->name'
                ),
		array(
                    'filter' => $filter,
                    'header'=>'Session',
                    'value' => '$data->instituteBatchNotification->instituteBatchSession->session_name'
                ),
		array(
                    'filter' => $filter,
                    'header'=>'Date',
                    'value' => '$data->instituteBatchNotification->instituteBatchSession->session_date'
                ),
		array(
                    'filter' => $filter,
                    'header'=>'Time',
                    'value' => '$data->instituteBatchNotification->instituteBatchSession->session_time'
                ),
		'mentor',
		'Agreement_with_session_and_mentor',
		
		'Expectations_met',
		'Learning_from_colleagues',
		'Real_situation_applicability',
		'rating',
		array(
                    'filter' => $filter,
                    'header'=>'Student Name',
                    'value' => '$data->student->name'
                ),
		
	),
)); ?>
