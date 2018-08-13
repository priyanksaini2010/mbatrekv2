<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
    "Case Study Details"=>array('moduleCasestudy/view','institute_batch_id' => $_GET['institute_batch_id'],'id'=>$_GET['casestudy_id']),
	'Manage',
);
$this->menu=array(
        array('label'=>'Manage Answers','url'=>array('casestudyQuizAnwers/admin','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'casestudy_quiz_id'=>$_GET['casestudy_quiz_id'])),
	array('label'=>'Add Answers','url'=>array('casestudyQuizAnwers/create','institute_batch_id'=>$_GET['institute_batch_id'],'casestudy_id'=>$_GET['casestudy_id'],'casestudy_quiz_id'=>$_GET['casestudy_quiz_id'])),
    
);

?>

<h1>Manage  Answers</h1>

<?php 
$status = array(0=>'Not-Correct',1=>'Corerct');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'casestudy-quiz-anwers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'answer',
		array(
                'name'=>'is_correct',
                'filter'=>$status,
                'value'=>array($this,'getCorrect')
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("casestudyQuizAnwers/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"casestudy_id"=>$_GET[\'casestudy_id\'],"casestudy_quiz_id"=>$data->casestudy_quiz_id,"id"=>$data->id))',
		),
	),
)); ?>
