<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage Students',
);

$this->menu=array(
	array('label'=>'Manage Students','url'=>array('students/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Add Students','url'=>array('students/create','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Upload Students','url'=>array('users/uploadstudents','institute_batch_id'=>$_GET['institute_batch_id'])),
        
);

?>

<h1>Manage <?php echo  $int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")"; ?> Students</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'students-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
                array('header'=>"Email","value"=>'$data->user->email'),
                array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}{viewprofile}",
			'updateButtonUrl' =>'$this->grid->controller->createUrl("students/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
                        'buttons' => array(
                            'viewprofile' => array(
                                'label' =>'<i class="icon-user"></i>',
                                'options'=>array('title'=>'View Profile'),
                                'url'=>'Yii::app()->createUrl("students/viewprofile", array("institute_batch_id" => $_GET[\'institute_batch_id\'],"id"=>$data->id))',
                            ),
                        )
		),
	),
)); ?>
