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


<?php

$grid = $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'campus-ambassador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'first_name',
		'last_name',
		'mobile_number',
		'email_id',
                array(
                        'header'=>"College",
                        "name"=>'college_id',
                        "value"=>'Colleges::model()->findByAttributes(array("id"=>$data->college_id))->name',
                        'filter'=>CHtml::listData( Colleges::model()->findAll(), 'id', 'name'),
                    ),
                array(
                        'header'=>"Course",
                        "name"=>'course_id',
                        "value"=>'Courses::model()->findByAttributes(array("id"=>$data->course_id))->title',
                        'filter'=>CHtml::listData( Courses::model()->findAll(), 'id', 'title'),
                    ),
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
)); 

$this->renderExportGridButton($grid,'Export To CSV',array('class'=>'btn btn-info pull-right'));
?>
