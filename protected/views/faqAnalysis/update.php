<?php
$this->breadcrumbs=array(
	'Faq Analysises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqAnalysis','url'=>array('index')),
	array('label'=>'Create FaqAnalysis','url'=>array('create')),
	array('label'=>'View FaqAnalysis','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage FaqAnalysis','url'=>array('admin')),
);
?>

<h1>Update FaqAnalysis <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>