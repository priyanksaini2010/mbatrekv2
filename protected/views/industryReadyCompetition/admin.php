<?php
$this->breadcrumbs=array(
	' Industry Ready Competitions'=>array('industryReadyCompetition/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Industry Ready Competition','url'=>array('industryReadyCompetition/admin')),
	
);


?>

<h1>Manage Industry Ready Competitions</h1>

<?php

$grid = $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'interview-ready-competition-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'mobile_number',
		'email_id',
                'name_of_college',
		array(
                        'header'=>"College",
                        "name"=>'college',
                        "value"=>'Colleges::model()->findByAttributes(array("id"=>$data->college))->name',
                        'filter'=>CHtml::listData( Colleges::model()->findAll(), 'id', 'name'),
                    ),
                array(
                        'header'=>"Course",
                        "name"=>'mba_batch',
                        "value"=>'Courses::model()->findByAttributes(array("id"=>$data->mba_batch))->title',
                        'filter'=>CHtml::listData( Courses::model()->findAll(), 'id', 'title'),
                    ),
		/*
		'college',
		
		'question_1',
		'question_2',
		'question_3',
		'registeration_date',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{view}"
		),
	),
)); 

$this->renderExportGridButton($grid,'Export To CSV',array('class'=>'btn btn-info pull-right'));
?>
