<?php
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
	$int->name=>array('institutes/admin'),
	'Manage Batches' => array('instituteBatches/admin','institute_id'=>$_GET['institute_id']),
	'View Batch Details',
);

$this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$model->id)),
	array('label'=>'Manage Sections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$model->id)),
//	array('label'=>'Manage Course Schedule','url'=>array('instituteCourses/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Case Studies','url'=>array('moduleCasestudy/admin','institute_batch_id'=> $model->id)),
	array('label'=>'Manage Webinars','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model->id,'type'=>1)),
	array('label'=>'Manage Speaker\'s Takeaway','url'=>array('moduleWebinar/admin','institute_batch_id'=> $model ->id,'type'=>2)),
	array('label'=>'Manage Assignments','url'=>array('moduleAssignment/admin','institute_batch_id'=> $model->id)),
        array('label'=>'Manage Sessions','url'=>array('instituteBatchSession/admin','institute_batch_id'=> $model->id)),
);
?>

<h3>Batch  Details</h3>
<p>
    Batch  : <?php echo $model->name; ?>
</p>
<p>
    Course :  <?php echo $model->instituteCourse->course->name;?>
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