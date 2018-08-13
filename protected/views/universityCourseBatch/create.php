<?php
$this->breadcrumbs=array(
	'Universities'=>array('universities/admin'),
	'University Details' => array('universities/view',"id"=>$_GET['university_id']),
	'Manage Univeristy Courses and Bataches'
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'University Details','url'=>array('universities/view',"id"=>$_GET['university_id'])),
	array('label'=>'Universities Courses And Batches','url'=>array('universityCourseBatch/admin',"university_id"=>$_GET['university_id'])),
	array('label'=>'Add Courses And Batches','url'=>array('universityCourseBatch/create',"university_id"=>$_GET['university_id'])),
);
?>
<h1>Create University Course Batch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>