<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);


$this->menu=array(
	array('label'=>'Manage Batch','url'=>array('instituteBatches/view','institute_id'=>$int->institute_id,'id'=>$int->id)),
	array('label'=>'Create Sections','url'=>array('instituteBatchNotification/create','institute_batch_id'=>$_GET['institute_batch_id'])),
    
);


?>

<h1>Add Institute Batch Notification</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>