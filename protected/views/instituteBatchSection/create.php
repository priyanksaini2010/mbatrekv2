<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Create',
);

$this->menu=array(
	array('label'=>'ManageSections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Sections','url'=>array('instituteBatchSection/create','institute_batch_id'=>$_GET['institute_batch_id'])),
     array('label'=>'Batch Student Matrix View','url'=>array('instituteBatchSection/matrixview','institute_batch_id'=>$_GET['institute_batch_id'])),

);


?>

<h1>Create Section</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>