<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $_GET['institute_batch_id']),
	'Update',
);
$this->menu=array(
        array('label'=>'Manage Assignment','url'=>array('moduleAssignment/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Assignment','url'=>array('moduleAssignment/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);

?>
<h1>Update Assignment</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>