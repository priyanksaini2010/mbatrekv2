<?php
$this->breadcrumbs=array(
	'Success Stories'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Maange Success Story','url'=>array('successStory/admin')),
	array('label'=>'Create Success Story','url'=>array('successStory/create')),
);

?>

<h1>Manage Success Stories</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'success-story-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'type',
//		'sub_type',
		'college_or_company',
		'author',
		'course',
		/*
		'video_url',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}{delete}"
		),
	),
)); ?>
