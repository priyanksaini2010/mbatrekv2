<?php
if ($_GET['type'] == 1) {
    $text = "Webinars";
} else {
    $text = "Speaker's Takeaway";
}
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);


$this->menu=array(
	array('label'=>'Manage '.$text,'url'=>array('admin','institute_batch_id'=>$_GET['institute_batch_id'],'type'=>$_GET['type'])),
);


?>

<h1>Create <?php echo $text;?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>