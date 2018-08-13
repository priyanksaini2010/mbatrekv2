<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Case Study Details',
);
	

$this->menu=array(
	array('label'=>'Manage Case Study','url'=>array('admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Manage Case Study Quiz','url'=>array('casestudyQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$model->id)),
            array('label'=>'Students Attempted Case Study','url'=>array('casestudyStudentScore/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$model->id)),
);

?>

<h1>Module Case Study Details</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		
		array('name'=>"module_id","value"=>$model->module->name),
		array('name'=>"function_id","value"=>$model->function->name),
		'title',
//		'background_image',
//		'file',
		'description',
	),
)); ?>
