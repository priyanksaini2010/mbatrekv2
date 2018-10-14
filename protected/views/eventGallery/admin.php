<?php
$this->breadcrumbs=array(
	'Event Galleries'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage EventGallery','url'=>array('eventGallery/admin')),
	array('label'=>'Create EventGallery','url'=>array('eventGallery/create')),
);


?>

<h1>Manage Event Galleries</h1>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'event-gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
//		'image',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}"
		),
	),
)); ?>
