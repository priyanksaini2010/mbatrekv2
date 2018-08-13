<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$assigment = ModuleAssignment::model()->findByPk($_GET['module_assignment_id']);
$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
        $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
        $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
        "Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $int->id),
        $assigment->title =>array('moduleAssignment/view','institute_batch_id' => $int->id,'id'=>$assigment->id),
	'Manage Assignments Questions' => array('moduleAssigmentQuiz/view','institute_batch_id' => $int->id,'id'=>$_GET['module_assigment_quiz_id'],'module_assignment_id' => $_GET['module_assignment_id']),
        'Manage Answers'
);
$this->menu=array(
        array('label'=>'Manage Answers','url'=>array('moduleAssigjmentQuizAnswer/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'],'module_assigment_quiz_id'=>$_GET["module_assigment_quiz_id"])),
	array('label'=>'Add Answer','url'=>array('moduleAssigjmentQuizAnswer/create','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'],'module_assigment_quiz_id'=>$_GET["module_assigment_quiz_id"])),
);

?>

<h1>Manage Answers</h1>
<?php 
$status = array(0=>'Not-Correct',1=>'Corerct');
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-assigjment-quiz-answer-grid',
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
                        "template" => "{update}{delete}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("moduleAssigjmentQuizAnswer/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"module_assignment_id"=>$_GET[\'module_assignment_id\'],"module_assigment_quiz_id"=>$data->module_assigment_quiz_id,"id"=>$data->id))',
		),
	),
)); ?>
