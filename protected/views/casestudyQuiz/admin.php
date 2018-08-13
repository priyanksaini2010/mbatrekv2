<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Case Study Details"=>array('moduleCasestudy/view','institute_batch_id' => $_GET['institute_batch_id'],'id'=>$_GET['casestudy_id']),
	'Manage',
);

$this->menu=array(
        array('label'=>'Manage Case Study Questions','url'=>array('casestudyQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
	array('label'=>'Add Question','url'=>array('casestudyQuiz/create','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'])),
        
);

?>
<h1>Manage Case Study Questions</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'casestudy-quiz-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'question',
		'question_score',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{view}{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("casestudyQuiz/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"casestudy_id"=>$data->casestudy_id,"id"=>$data->id))',
                        'viewButtonUrl' => '$this->grid->controller->createUrl("casestudyQuiz/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"casestudy_id"=>$data->casestudy_id,"id"=>$data->id))',
		),
	),
)); ?>
