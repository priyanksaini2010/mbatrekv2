<?php
$this->breadcrumbs=array(
	'Interview / Industry Ready Competitions'=>array('interviewReadyCompetition/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Interview / Industry Ready Competition','url'=>array('interviewReadyCompetition/admin')),
	
);


?>

<h1>View Interview / Industry Ready Competitions</h1>




<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'mobile_number',
		'email_id',
		'mba_batch',
		'college',
             array(
                    "name" => "college",
                    'value' => $model->college0->name,
                ),
                array(
                    "name" => "mba_batch",
                    'value' => $model->mbaBatch->year,
                ),
		'name_of_college',
		'question_1',
		'question_2',
		'question_3',
		'registeration_date',
	),
)); ?>
