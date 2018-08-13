<?php
$this->breadcrumbs=array(
	'Videoses'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage Videos','url'=>array('videos/admin')),
	array('label'=>'Create Videos','url'=>array('videos/create')),
);

?>

<h1>Manage Videos</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'videos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tag_line',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}"
		),
	),
)); ?>
