<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);
$assigment = ModuleAssignment::model()->findByPk($_GET['module_assignment_id']);
$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
        $int->instituteCourse->course->name=> array('instituteCourse/admin','institute_id' => $int->instituteCourse->institute->id),
        $int->name => array('instituteBatches/view','institute_course_id' => $int->instituteCourse->course->id,'id'=>$int->id),
        "Manage Assignments" => array('moduleAssignment/admin','institute_batch_id' => $int->id),
        $assigment->title =>array('moduleAssignment/view','institute_batch_id' => $int->id,'id'=>$assigment->id),
	'Manage Assignments Questions',
);

$this->menu=array(
        array('label'=>'Manage  Assignment Question','url'=>array('moduleAssigmentQuiz/admin','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'])),
	array('label'=>'Add Assignment Question','url'=>array('moduleAssigmentQuiz/create','institute_batch_id'=>$_GET['institute_batch_id'],'module_assignment_id'=>$_GET['module_assignment_id'])),
);

?>

<h1>Manage Assignments Questions</h1>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-assigment-quiz-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'question',
		'question_score',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        "template"=>"{view}{update}",
                        'updateButtonUrl' =>'$this->grid->controller->createUrl("moduleAssigmentQuiz/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id,"module_assignment_id"=>$data->module_assignment_quiz_id))',
                    'viewButtonUrl' =>'$this->grid->controller->createUrl("moduleAssigmentQuiz/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id,"module_assignment_id"=>$data->module_assignment_quiz_id))',
		),
	),
)); ?>
