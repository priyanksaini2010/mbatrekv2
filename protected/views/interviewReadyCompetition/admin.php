<?php
$this->breadcrumbs=array(
	'Interview  Ready Competitions'=>array('interviewReadyCompetition/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Interview Ready Competition','url'=>array('interviewReadyCompetition/admin')),
	
);


?>

<h1>Manage Interview Ready Competitions</h1>
<a href="<?php echo Yii::app()->createUrl("interviewReadyCompetition/export");?>"> <button class="btn btn-info" >Export To Excel</button></a>
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
?>
