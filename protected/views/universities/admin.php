<?php
$this->breadcrumbs=array(
	'Universities'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Universities','url'=>array('universities/admin')),
	array('label'=>'Create Universities','url'=>array('universities/create')),
);

?>

<h1>Manage Universities</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'universities-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'state',
		'city',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template'=>"{view}{update}{delete}"
		),
	),
)); ?>
