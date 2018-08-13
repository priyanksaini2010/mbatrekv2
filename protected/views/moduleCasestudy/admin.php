<?php
$int = InstituteBatches::model()->findByPk($_GET['institute_batch_id']);

$this->breadcrumbs=array(
	$int->universityCourseBatch->courser_name=>array('institutes/admin'),
 
$int->universityCourseBatch->courser_name."(".$int->universityCourseBatch->courser_batch.")" => array('instituteBatches/view','institute_id' => $int->institute_id,'id'=>$int->id),
	'Manage',
);
$this->menu=array(
        array('label'=>'Manage Case Study','url'=>array('moduleCasestudy/admin','institute_batch_id'=>$_GET['institute_batch_id'])),
        array('label'=>'Create Case Study','url'=>array('moduleCasestudy/create','institute_batch_id'=>$_GET['institute_batch_id'])),
);


?>

<h1>Manage <?php echo  $int->universityCourseBatch->courser_name; ?> - <?php echo  $int->name; ?> Case Study</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-casestudy-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{view}{update}",
                        'updateButtonUrl' => '$this->grid->controller->createUrl("moduleCasestudy/update", array("institute_batch_id"=>$data->institute_batch_id,"id"=>$data->id))',
                        'viewButtonUrl' => '$this->grid->controller->createUrl("moduleCasestudy/view", array("institute_batch_id"=>$data->institute_batch_id,"id"=>$data->id))',
		),
	),
)); ?>
