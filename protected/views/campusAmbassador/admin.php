<?php
$this->breadcrumbs=array(
	'Campus Ambassadors'=>array('campusAmbassador/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Campus Ambassador','url'=>array('campusAmbassador/admin')),
//	array('label'=>'Create CampusAmbassador','url'=>array('create')),
);


?>

<h1>Manage Campus Ambassadors</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'campus-ambassador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'mobile_number',
		'email_id',
//		'college_id',
//		
//		'course_id',
//		'year_of_graduation_id',
//		'question_1',
//		'question_2',
//		'question_3',
		'registeration_date',
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{view}"
		),
	),
)); ?>
