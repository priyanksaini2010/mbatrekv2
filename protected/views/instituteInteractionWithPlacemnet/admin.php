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

<h1>Manage Talk To Us</h1>


<?php
$filter = CHtml::listData(Module::model()->findAll(),'id','name');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-interaction-with-placemnet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		    array(
                    'filter' => $filter,
                    'name'=>'module_id',
                    'value' => '$data->module->name'
                    ),
		'date_time',
		'topic',
		'stream',
		'venue',
		'agenda',
		'type',
		'duration',
		'open_time',
		'close_time',
		'summary',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' => '$this->grid->controller->createUrl("instituteInteractionWithPlacemnet/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))'
		),
	),
)); ?>
