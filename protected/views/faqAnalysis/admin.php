<?php
$this->breadcrumbs=array(
	'Faq Analysises'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Faq Analysis','url'=>array('faqAnalysis/admin')),
	
);

?>

<h1>FAQ Analysis</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'faq-analysis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'helpful',
		'not_helpful',
		
	),
)); ?>
