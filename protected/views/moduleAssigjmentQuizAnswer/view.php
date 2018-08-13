<?php
$this->breadcrumbs=array(
	'Module Assigjment Quiz Answers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ModuleAssigjmentQuizAnswer','url'=>array('index')),
	array('label'=>'Create ModuleAssigjmentQuizAnswer','url'=>array('create')),
	array('label'=>'Update ModuleAssigjmentQuizAnswer','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete ModuleAssigjmentQuizAnswer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModuleAssigjmentQuizAnswer','url'=>array('admin')),
);
?>

<h1>View ModuleAssigjmentQuizAnswer #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'module_assigment_quiz_id',
		'answer',
		'is_correct',
	),
)); ?>
