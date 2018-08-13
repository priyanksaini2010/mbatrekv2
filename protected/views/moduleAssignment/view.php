<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
"Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $_GET['institute_batch_id']),
	'Details',
);
$this->menu=array(
	array('label'=>'Manage Assignment','url'=>array('moduleAssignment/view','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$model->id)),
	array('label'=>'Manage Quiz','url'=>array('moduleAssigmentQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$model->id)),
	array('label'=>'Students Analysis','url'=>array('student','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$model->id))
);

?>
<h1>Assignment Details</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		
		array(
                    'name'=>'module_id',
                    'value' => $model->module->name
                ),
		'title',
		'due_date',
		'close_date',
		'open_date',
		'content',
	),
)); ?>
