<?php
$this->breadcrumbs=array(
	'SEO Management'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'SEO Management','url'=>array('seo/admin')),
	array('label'=>'Add SEO Details','url'=>array('seo/create')),
);
?>

<h1>SEO Management</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'seo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'url',
		'meta_tags',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template' => '{update}{delete}'
		),
	),
)); ?>
