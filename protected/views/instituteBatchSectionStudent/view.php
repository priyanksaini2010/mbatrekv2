<?php
$this->breadcrumbs=array(
	'Institute Batch Section Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteBatchSectionStudent','url'=>array('index')),
	array('label'=>'Create InstituteBatchSectionStudent','url'=>array('create')),
	array('label'=>'Update InstituteBatchSectionStudent','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteBatchSectionStudent','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteBatchSectionStudent','url'=>array('admin')),
);
?>

<h1>View InstituteBatchSectionStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_batch_section_id',
		'student_id',
	),
)); ?>
