<?php
$this->breadcrumbs=array(
	'Blogs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Blogs','url'=>array('create')),
);

?>

<h1>Manage Blogs</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blogs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
//		'blog_category_id',
		'title',
//		'content',
		'author',
//		'background_image',
		/*
		'banner_image',
		'date_created',
		'date_updated',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => '{update} {delete}'
		),
	),
)); ?>
