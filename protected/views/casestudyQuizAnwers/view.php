<?php
$this->breadcrumbs=array(
	'Casestudy Quiz Anwers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CasestudyQuizAnwers','url'=>array('index')),
	array('label'=>'Create CasestudyQuizAnwers','url'=>array('create')),
	array('label'=>'Update CasestudyQuizAnwers','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CasestudyQuizAnwers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CasestudyQuizAnwers','url'=>array('admin')),
);
?>

<h1>View CasestudyQuizAnwers #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'casestudy_quiz_id',
		'answer',
		'is_correct',
	),
)); ?>
