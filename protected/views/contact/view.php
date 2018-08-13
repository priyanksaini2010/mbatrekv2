<?php
$this->breadcrumbs=array(
	'Contacts'=>array('admin'),
	
);

?>

<h1>View Contact</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'email',
		'subject',
		'type',
		'message',
	),
)); ?>
