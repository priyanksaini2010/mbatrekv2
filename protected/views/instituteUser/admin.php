<?php
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
        $int->name => array('institutes/admin'),
        'Manage Courses',
);

$this->menu=array(
	array('label'=>'Manage Course','url'=>array('instituteCourse/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add New Course','url'=>array('instituteCourse/create','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Assotiated Users','url'=>array('instituteUser/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add Users','url'=>array('instituteUser/create','institute_id'=>$_GET['institute_id'])),
);
?>


<h1>Manage Institute Users</h1>


<?php 

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'institute_id',
		array(
                    
                    'header' =>"Name",
                    "value" => '$data->user->fname." ".$data->user->lname',
                ),
                array(
                    
                    'header' =>"Email",
                    "value" => '$data->user->email',
                ),
                array(
                    
                    'header' =>"City",
                    "value" => '$data->user->city',
                ),
                array(
                    
                    'header' =>"Last Login",
                    "value" => '$data->user->last_login',
                ),
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    "template" => "{update}{delete}",
		    'updateButtonUrl' =>'$this->grid->controller->createUrl("instituteUser/update", array("institute_id"=>$_GET[\'institute_id\'],"id"=>$data->id))',
                    
		),
	),
)); ?>
