<?php
$this->breadcrumbs=array(
	'Feedbacks'=>array('admin'),	
);

?>

<h1>View Feedback #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'message',
	),
)); ?>
