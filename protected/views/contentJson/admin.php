<?php
$this->breadcrumbs=array(
	'Content Jsons'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Content','url'=>array('contentJson/admin')),
	
);


?>

<h1>Manage Content</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'content-json-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'page',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update} {delete}'
		),
	),
)); ?>
