<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);


$this->menu=array(
	array('label'=>'Create Sessions','url'=>array('create','institute_batch_id'=>$_GET['institute_batch_id'])),
);


?>

<h1>Manage Sessions</h1>

<?php 
$filter = CHtml::listData(Module::model()->findAll(),'id','name');
$batch = CHtml::listData(InstituteBatchSection::model()->findAllByAttributes(array("institute_batch_id"=>$_GET['institute_batch_id'])),"id","section_name");
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-session-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'filter' => $batch,
                    'name'=>'institute_batch_section_id',
                    'value' => '$data->instituteBatchSection->section_name'
                    ),
		array(
                    'filter' => $filter,
                    'name'=>'module_id',
                    'value' => '$data->module->name'
                    ),
		'session_name',
		'session_details',
		'session_date',
		'session_time',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{view}{update}{delete}",
                        'updateButtonUrl' =>'$this->grid->controller->createUrl("instituteBatchSession/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
                        'viewButtonUrl' =>'$this->grid->controller->createUrl("instituteBatchSession/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
		),
	),
)); ?>
