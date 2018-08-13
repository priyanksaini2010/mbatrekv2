<?php
$this->breadcrumbs=array(
	'Institute Courses'=>array('admin','institute_id'=>$_GET['institute_id']),
	'Create',
);
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
        $int->name => array('institutes/admin'),
        'Courses' => array('admin','institute_id'=>$_GET['institute_id']),
        'Create',
);


$this->menu=array(
	array('label'=>'Manage Course','url'=>array('instituteCourse/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add New Course','url'=>array('instituteCourse/create','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Assotiated Users','url'=>array('instituteUser/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add Users','url'=>array('instituteUser/create','institute_id'=>$_GET['institute_id'])),
);
?>

<h1>Add Course</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>