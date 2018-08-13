    <?php
$this->breadcrumbs=array(
	'Institutes'=>array('admin'),
	'Manage',
);
$this->menu=array(
	array('label'=>'Manage Institutes','url'=>array('institutes/admin')),
	array('label'=>'Create Institutes','url'=>array('institutes/create')),
);
?>

<h1>Manage Institutes</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'institutes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
                    'name'=>'university_id',
                    'filter'=>CHtml::listData(Universities::model()->findAll(), 'id', 'name'),
                    'value'=>'Universities::model()->findByAttributes(array("id"=>$data->university_id))->name'
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{view}{update}{delete}',
                        'viewButtonUrl'   => '$this->grid->controller->createUrl("instituteBatches/admin", array("institute_id"=>$data->id))',
                        'buttons' => array('view'=>array('label'=>'View Courses'),)
		),
	),
)); ?>
