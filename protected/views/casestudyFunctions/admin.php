<?php
$this->breadcrumbs=array(
	'Case Study Functions'=>array('admin'),
	'Manage',
);


$this->menu=array(
	array('label'=>'Manage Case Study Functions','url'=>array('casestudyFunctions/admin')),
	array('label'=>'Add Functions','url'=>array('casestudyFunctions/create')),
);


?>

<h1>Manage Case study Functions</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'casestudy-functions-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        "template" => "{update}"
		),
	),
)); ?>
