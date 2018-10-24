<?php
$this->breadcrumbs=array(
	'Colleges'=>array('colleges/admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Colleges','url'=>array('colleges/admin')),
	array('label'=>'Create Colleges','url'=>array('colleges/create')),
);
?>

<h1>Manage Colleges</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'colleges-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}'
		),
	),
)); ?>
