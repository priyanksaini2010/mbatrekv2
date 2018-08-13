<?php
if ($_GET['type'] == 1) {
    $text = "Webinars";
} else {
    $text = "Speaker's Takeaway";
}
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);


$this->menu=array(
	array('label'=>'Create '.$text,'url'=>array('create','institute_batch_id'=>$_GET['institute_batch_id'],"type"=>$_GET["type"])),
);


?>

<h1>Manage <?php echo $text;?></h1>


<?php 
$filter = CHtml::listData(Module::model()->findAll(),'id','name');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-webinar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'filter' => $filter,
                    'name'=>'module_id',
                    'value' => '$data->module->name'
                    ),
		'title',
                'speaker',
                'date_time',
		/*
		'description',
		
		'about_speaker',
		'file',
		
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' =>'$this->grid->controller->createUrl("moduleWebinar/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id,"type"=>$_GET[\'type\']))',
		),
	),
)); ?>
