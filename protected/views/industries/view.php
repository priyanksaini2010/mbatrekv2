<?php
$_GET['industry_id'] = $model->id;
$this->breadcrumbs=array(
	'Industries'=>array('admin'),
	$model->name,
);

$this->menu = getMenu();
?>

<h1>Industry Details</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'name',
	),
)); ?>
