<?php
$this->breadcrumbs=array(
	'Modules'=>array('admin'),
	'Manage',
);

$this->menu=array(
        array('label'=>'Manage Module','url'=>array('module/admin')),
	array('label'=>'Create Module','url'=>array('module/create')),
);


?>

<h1>Manage MBATrek Modules</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'module-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
                'due_month',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}"
		),
	),
)); ?>
