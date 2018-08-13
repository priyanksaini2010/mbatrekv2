<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
        $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
        $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
	'Manage Course Schedule',
);


$this->menu=array(
	array('label'=>'Manage Course Schedule','url'=>array('instituteCourses/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Add Course Schedule','url'=>array('instituteCourses/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);
?>

<h1>Manage <?php echo  $int->instituteCourse->course->name; ?> - <?php echo  $int->name; ?> Course Schedule</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-courses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'details',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("instituteCourses/update", array("institute_batch_id"=>$data->institute_batch_id,"id"=>$data->id))',
                ),
	),
)); ?>
