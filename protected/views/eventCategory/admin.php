<?php
$this->breadcrumbs=array(
	'Event Categories'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Maange Event Category','url'=>array('eventCategory/admin')),
	array('label'=>'Create Event Category','url'=>array('eventCategory/create')),
);

?>

<h1>Manage Event Categories</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'event-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update}{delete}'
		),
	),
)); ?>
