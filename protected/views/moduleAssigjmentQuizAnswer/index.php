<?php
$this->breadcrumbs=array(
	'Module Assigjment Quiz Answers',
);

$this->menu=array(
	array('label'=>'Create ModuleAssigjmentQuizAnswer','url'=>array('create')),
	array('label'=>'Manage ModuleAssigjmentQuizAnswer','url'=>array('admin')),
);
?>

<h1>Module Assigjment Quiz Answers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
