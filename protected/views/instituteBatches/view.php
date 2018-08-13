<?php
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
	$int->name=>array('institutes/admin'),
	'Manage Batches' => array('instituteBatches/admin','institute_id'=>$_GET['institute_id']),
	'View Batch Details',
);
if ($_GET['institute_id'] == 0) {
    $this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$model->id)),
//	array('label'=>'Manage Sections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$model->id)),
//	array('label'=>'Manage Course Schedule','url'=>array('instituteCourses/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Case Studies','url'=>array('moduleCasestudy/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Webinars','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model->id,'type'=>1)),
//	array('label'=>'Manage Speaker\'s Takeaway','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model ->id,'type'=>2)),
	array('label'=>'Manage Assignments','url'=>array('moduleAssignment/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Manage Sessions','url'=>array('instituteBatchSession/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Manage Talk To Us','url'=>array('instituteInteractionWithPlacemnet/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Add Notification','url'=>array('instituteBatchNotification/create','institute_batch_id'=> $model->id)),
        array('label'=>'Add Student Rating','url'=>array('instituteBatchSession/addrating','institute_batch_id'=> $model->id)),
        array('label'=>'Pre Session Output','url'=>array('instituteBatchNotificationStudent/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Post Session Output','url'=>array('instituteBatchNotificationStudentPost/admin','institute_batch_id'=> $model->id)),
);
}else {
    $this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$model->id)),
	array('label'=>'Manage Sections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$model->id)),
//	array('label'=>'Manage Course Schedule','url'=>array('instituteCourses/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Case Studies','url'=>array('moduleCasestudy/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Webinars','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model->id,'type'=>1)),
	array('label'=>'Manage Speaker\'s Takeaway','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model ->id,'type'=>2)),
	array('label'=>'Manage Assignments','url'=>array('moduleAssignment/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Manage Sessions','url'=>array('instituteBatchSession/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Manage Talk To Us','url'=>array('instituteInteractionWithPlacemnet/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Add Notification','url'=>array('instituteBatchNotification/create','institute_batch_id'=> $model->id)),
        array('label'=>'Stop Notification','url'=>array('instituteBatchNotification/stop','institute_batch_id'=> $model->id)),
        array('label'=>'Add Student Rating','url'=>array('instituteBatchSession/addrating','institute_batch_id'=> $model->id)),
        array('label'=>'Pre Session Output','url'=>array('instituteBatchNotificationStudent/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Post Session Output','url'=>array('instituteBatchNotificationStudentPost/admin','institute_batch_id'=> $model->id)),
	 array('label'=>'Manage Sessions Documents','url'=>array('sessionDocument/admin','institute_batch_id'=>$_GET['institute_batch_id'],'batch_id'=>$_GET['id'],'type'=>"batch")),
	 array('label'=>'Manage Student Documents','url'=>array('studentDocument/admin','institute_batch_id'=>$_GET['id'])),
);
}

?>

<h3>Batch  Details</h3>
<p>
    Batch  : <?php echo $model->name; ?>
</p>
<p>
    Course :  <?php  echo $model->universityCourseBatch->courser_name;?>
</p>
<p>
    Institute :  <?php echo $model->institute->name;?>
</p>
<p>
    Total Students :  <?php echo count($model->students);?>
</p>
<p>
    Total Case Studies :  <?php echo count($model->moduleCasestudies);?>
</p>
<p>
    Total Webinars :  <?php echo count($model->moduleWebinars);?>
</p>
<p>
    Total Assignments :  <?php echo count($model->moduleAssignments);?>
</p>