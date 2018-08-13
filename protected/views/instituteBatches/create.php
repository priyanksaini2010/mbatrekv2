<?php
$this->breadcrumbs=array(
	'Institute Batches'=>array('index'),
	'Create',
);
$int = Institutes::model()->findByPk($_GET['institute_id']);
$this->breadcrumbs=array(
	$int->name=>array('institutes/admin'),
        'Manage Batches' => array('admin','institute_id'=>$_GET['institute_id']),
	'Create New Batch',
);


$this->menu=array(
	array('label'=>'Manage Batch','url'=>array('instituteBatches/admin','institute_id' => $_GET['institute_id'])),
	array('label'=>'Create New Batch','url'=>array('instituteBatches/create','institute_id' => $_GET['institute_id'])),
);
?>

<h1>Create New Batch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>