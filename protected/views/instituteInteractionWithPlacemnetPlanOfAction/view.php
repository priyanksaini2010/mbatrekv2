<?php
$this->breadcrumbs=array(
	'Institute Interaction With Placemnet Plan Of Actions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('index')),
	array('label'=>'Create InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('create')),
	array('label'=>'Update InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InstituteInteractionWithPlacemnetPlanOfAction','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstituteInteractionWithPlacemnetPlanOfAction','url'=>array('admin')),
);
?>

<h1>View InstituteInteractionWithPlacemnetPlanOfAction #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'institute_interaction_with_placemnet_id',
		'plan_of_action',
		'person_responsible',
		'due_date',
		'evidence_of_completion',
	),
)); ?>
