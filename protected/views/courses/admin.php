<?php
$this->breadcrumbs=array(
	'Courses'=>array('courses/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Courses','url'=>array('courses/admin')),
	array('label'=>'Create Courses','url'=>array('courses/create')),
);

?>

<h1>Manage Courses</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'courses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update} {delete}'
		),
	),
)); ?>
