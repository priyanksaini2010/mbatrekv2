<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);

$this->menu=array(
    array('label'=>'View Sessions Details','url'=>array('instituteBatchSession/view','institute_batch_id'=>$_GET['institute_batch_id'],'id'=>$_GET['institute_batch_session_id'])),
    array('label'=>'Manage Sessions Attendance','url'=>array('instituteBatchSessionStudentAttendance/admin','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['institute_batch_session_id'])),
    array('label'=>'Add Sessions Attendance','url'=>array('instituteBatchSessionStudentAttendance/create','institute_batch_id'=>$_GET['institute_batch_id'],'institute_batch_session_id'=>$_GET['institute_batch_session_id'])),
);


?>
<?php
$filter2 = CHtml::listData(InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])), "id", "section_name");
$filter3 = CHtml::listData(Students::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])), "id", "name");
$filter = array("1"=>"Preset","0"=>"Absent");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-session-student-attendance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array("filter"=>$filter2,"name"=>"section_id","value"=>'$data->section->section_name'),
		array("filter"=>$filter3,"name"=>"student_id","value"=>'$data->student->name'),
                array("filter"=>$filter,"name"=>"is_present","value"=>'$data->is_present == 1?"Preset":"Absent"'),
		'session_date',
	),
)); ?>
