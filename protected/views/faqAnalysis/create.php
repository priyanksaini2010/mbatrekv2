<?php
$this->breadcrumbs=array(
	'Faq Analysises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaqAnalysis','url'=>array('index')),
	array('label'=>'Manage FaqAnalysis','url'=>array('admin')),
);
?>

<h1>Create FaqAnalysis</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>