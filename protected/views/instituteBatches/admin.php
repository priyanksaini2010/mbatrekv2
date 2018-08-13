<?php
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
	$int->name=>array('institutes/admin'),
        'Manage Batches',
);

$this->menu=array(
	array('label'=>'Manage Batch','url'=>array('instituteBatches/admin','institute_id' => $_GET['institute_id'])),
	array('label'=>'Create New Batch','url'=>array('instituteBatches/create','institute_id' => $_GET['institute_id'])),
	array('label'=>'Assotiated Users','url'=>array('instituteUser/admin','institute_id'=>$_GET['institute_id'])),
	array('label'=>'Add Users','url'=>array('instituteUser/create','institute_id'=>$_GET['institute_id'])),
);

?>

<h1>Manage Institute Batches</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institute-batches-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'updateButtonUrl' => '$this->grid->controller->createUrl("instituteBatches/update", array("institute_id"=>$data->institute_id,"id"=>$data->id))',
                        'viewButtonUrl' => '$this->grid->controller->createUrl("instituteBatches/view", array("institute_id"=>$data->institute_id,"id"=>$data->id))',
                        'template' => "{view}{update}{delete}"
		),
	),
)); ?>
