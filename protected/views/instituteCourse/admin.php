<?php
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
        $int->name => array('institutes/admin'),
        'Manage Courses',
);

$this->menu=array(
	array('label'=>'Manage Course','url'=>array('instituteCourse/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add New Course','url'=>array('instituteCourse/create','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Assotiated Users','url'=>array('instituteUser/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add Users','url'=>array('instituteUser/create','institute_id'=>$_GET['institute_id'])),
);
?>

<h1>Manage Courses At <?=$int->name;?></h1>
<!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-course-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
                    'name'=>'course_id',
                    'filter'=>CHtml::listData(Courses::model()->findAll(), 'id', 'name'),
                    'value'=>'Courses::model()->findByAttributes(array("id"=>$data->course_id))->name'
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{view}',
                        'viewButtonUrl'   => '$this->grid->controller->createUrl("instituteBatches/admin", array("institute_course_id"=>$data->id))',
                        'buttons' => array('view'=>array('label'=>'View Batches'),)
		),
	),
)); ?>
