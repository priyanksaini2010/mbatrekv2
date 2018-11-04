<?php
$this->breadcrumbs=array(
	'Videos'=>array('admin'),
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
//		'id',
//		'type',
		'title',
		'content',
//		'youtube_video_link',
                array( 'name'=>'youtube_video_link', 'type'=>'raw' ),

		'date_created',
		/*
		'date_updated',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update}{delete}',
		),
	),
)); ?>
