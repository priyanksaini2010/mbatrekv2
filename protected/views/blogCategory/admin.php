<?php
$this->breadcrumbs=array(
	'Blog Categories'=>array('index'),
	'Manage Categories',
);

$this->menu=array(
        array('label'=>'Manage Categories','url'=>array('blogCategory/admin')),
	array('label'=>'Create Category','url'=>array('blogCategory/create')),
);

?>

<h1>Manage Blog Categories</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'blog-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
                        'template' => "{update}",
		),
	),
)); ?>
