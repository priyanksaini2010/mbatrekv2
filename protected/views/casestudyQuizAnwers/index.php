<?php
$this->breadcrumbs=array(
	'Casestudy Quiz Anwers',
);

$this->menu=array(
	array('label'=>'Create CasestudyQuizAnwers','url'=>array('create')),
	array('label'=>'Manage CasestudyQuizAnwers','url'=>array('admin')),
);
?>

<h1>Casestudy Quiz Anwers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
