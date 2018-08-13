<?php
if ($_GET['type'] == 1) {$t = "Areas Of Improvement";} else {$t = "Strong Areas";}
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$student = Students::model()->findByPk($_GET['student_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Manage Students" => array('students/admin','institute_batch_id' => $_REQUEST['institute_batch_id']),
    $student->name =>  array('students/viewprofile','institute_batch_id' => $_REQUEST['institute_batch_id'],"id"=>$student->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Add '.$t,'url'=>array('create','institute_batch_id'=>$_GET['institute_batch_id'],'student_id'=>$student->id,'type'=>$_GET['type'])),
	
);

?>

<h1> <?php if ($_GET['type'] == 1) {echo "Areas Of Improvement For";} else {echo "Strong Areas";}?><?php echo ucfirst($student->name);?></h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'student-area-of-improvement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'student_id',
		'notes',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        "template" => "{update}{delete}",
                        "updateButtonUrl" => 'Yii::app()->createUrl("studentAreaOfImprovement/update", array("institute_batch_id" => $_GET[\'institute_batch_id\'],"student_id"=>$_GET[\'student_id\'],"type"=>$_GET[\'type\'],"id"=>$data->id))',
		),
	),
)); ?>
