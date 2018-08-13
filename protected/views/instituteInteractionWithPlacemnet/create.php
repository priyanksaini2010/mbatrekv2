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
);
?>


<h1>Create Talk To Us</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>