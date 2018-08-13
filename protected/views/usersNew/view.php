<?php
$this->breadcrumbs=array(
	'Users News'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsersNew','url'=>array('index')),
	array('label'=>'Create UsersNew','url'=>array('create')),
	array('label'=>'Update UsersNew','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete UsersNew','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersNew','url'=>array('admin')),
);
?>

<h1>View UsersNew #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'email',
		'password',
		'update_subscription',
		'is_verified',
		'date_created',
		'role',
	),
)); ?>
