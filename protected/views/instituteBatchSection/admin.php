<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->instituteCourse->institute->name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);


$this->menu=array(
	array('label'=>'ManageSections','url'=>array('instituteBatchSection/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Create Sections','url'=>array('instituteBatchSection/create','institute_batch_id'=>$_GET['institute_batch_id'])),
	array('label'=>'Batch Student Matrix View','url'=>array('instituteBatchSection/matrixview','institute_batch_id'=>$_GET['institute_batch_id'])),

);


?>

<h1>Manage Sections</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batch-section-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'section_name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}{view}",
                        'updateButtonUrl' =>'$this->grid->controller->createUrl("instituteBatchSection/update", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
                        'viewButtonUrl' =>'$this->grid->controller->createUrl("instituteBatchSection/view", array("institute_batch_id"=>$_GET[\'institute_batch_id\'],"id"=>$data->id))',
			
		),
	),
)); ?>
