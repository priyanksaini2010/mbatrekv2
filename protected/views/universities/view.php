<?php
$this->breadcrumbs=array(
	'Universities'=>array('universities/admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'University Details','url'=>array('universities/view',"id"=>$model->id)),
	array('label'=>'Universities Courses And Batches','url'=>array('universityCourseBatch/admin',"university_id"=>$model->id)),
);
?>

<h1>University Details</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'state',
		'city',
	),
)); ?>
