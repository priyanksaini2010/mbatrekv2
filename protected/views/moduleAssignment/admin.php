<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);
$this->menu=array(
        array('label'=>'Manage Assignment','url'=>array('moduleAssignment/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Assignment','url'=>array('moduleAssignment/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);

?>

<h1>Manage Assignments</h1>

<?php 
$filter = CHtml::listData(Module::model()->findAll(),'id','name');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-assignment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'filter' => $filter,
                    'name'=>'module_id',
                    'value' => '$data->module->name'
                ),
		'title',
		'due_date',
		'close_date',
                'open_date',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{view}{update}",
                    'updateButtonUrl' =>'$this->grid->controller->createUrl("moduleAssignment/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
                    'viewButtonUrl' =>'$this->grid->controller->createUrl("moduleAssignment/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
		),
	),
)); ?>
