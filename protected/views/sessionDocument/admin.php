<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$student = Students::model()->findByPk($_GET['institute_batch_session_id']);
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
if(isset($_GET['type'])) {
    $int = InstituteBatches::model()->findByPk($_GET['batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Session Document',
);
$this->menu=array(
	array('label'=>'Add '.$t,'url'=>array('create','batch_id'=>$_GET['batch_id'],'type'=>$_GET['type'])));
}else{
$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Manage Students" => array('students/admin','institute_batch_id' => $_REQUEST['institute_batch_id']),
    $student->name =>  array('students/viewprofile','institute_batch_id' => $_REQUEST['institute_batch_id'],"id"=>$student->id),
	'Update',
);
$this->menu=array(
	array('label'=>'Add '.$t,'url'=>array('create','institute_batch_id'=>$_GET['institute_batch_id'],'student_id'=>$student->id,'type'=>$_GET['type'])));
}


?>
<h1>Manage Session Documents</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'session-document-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'task_assigned',
		'link_of_assignment',
		'your_document',
		array(
		    'class'=>'bootstrap.widgets.TbButtonColumn',
		    "template" => "{update}{delete}",
		    'updateButtonUrl' =>'$this->grid->controller->createUrl("sessionDocument/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"student_id"=>$_GET[\'institute_batch_session_id\'],"id"=>$data->id,"batch_id" => $_GET[\'batch_id\'],"type"=>$_GET[\'type\']))',
		),
	),
)); ?>
