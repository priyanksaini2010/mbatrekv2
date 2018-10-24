<?php
$this->breadcrumbs=array(
	'Year Of Graduations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Year Of Graduation','url'=>array('yearOfGraduation/admin')),
	array('label'=>'Create Year Of Graduation','url'=>array('yearOfGraduation/create')),
);


?>

<h1>Manage Year Of Graduations</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'year-of-graduation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'year',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}'
		),
	),
)); ?>
