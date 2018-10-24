<?php
$this->breadcrumbs=array(
	'Campus Ambassadors'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CampusAmbassador','url'=>array('campusAmbassador/admin')),
//	array('label'=>'Create CampusAmbassador','url'=>array('create')),
);


?>

<h1>View Campus Ambassador</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'first_name',
		'last_name',
		'mobile_number',
		'email_id',
//		'college_id',
                array(
                    "name" => "college_id",
                    'value' => $model->college->name,
                ),
                array(
                    "name" => "course_id",
                    'value' => $model->course->title,
                ),
                array(
                    "name" => "year_of_graduation_id",
                    'value' => $model->yearOfGraduation->year,
                ),
//		'course_id',
//		'year_of_graduation_id',
		'question_1',
		'question_2',
		'question_3',
		'registeration_date',
	),
)); ?>
